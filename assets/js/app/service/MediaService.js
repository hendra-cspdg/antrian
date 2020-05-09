class MediaService extends Connection{

	mediaContainer;

	data;

	service;

	src;

	type;

	currentIndex;

	activeMedia;

	constructor(){
		super();

		this.service = new Services();
		this.mediaContainer = $('#content-wrapper');

		this.currentIndex = 1;
	}

	play(media){
		if (media.type === 'image'){
			this.playImageContent(media);
		}else{
			this.playVideoContent(media);
		}
	}

	changeMedia()
	{
		if (this.currentIndex >= this.data.length){
			this.currentIndex = 0;
		}

		this.play(this.data[this.currentIndex]);
		this.currentIndex++;
	}

	playImageContent(media){
		let parent = this;
		let content =  '<div class="image-slider media-slider animated slideInRight" id="image-content">' +
							'<img src="'+(media.src)+'" alt="media image">'+
						'</div>';
		this.mediaContainer.html(content);
		setTimeout(function () {
			$('#image-content').removeClass('slideInRight').addClass(' slideOutLeft');
			setTimeout(function () {
				parent.changeMedia();
			},1000);
		},5000);
	}

	playVideoContent(media){
		let parent = this;
		let content = '<div class="video-slider media-slider animated fadeIn " id="video-container">' +
							'<video  id="video-player" autoplay controls style="width: 100%;height: 100%">'+
								'<source src="'+(media.src)+'" type="video/mp4">'+
							'</video>'+
						'</div>';

		setTimeout(function () {
			parent.mediaContainer.html(content);
			$('#video-container').removeClass('fadeIn').addClass('fadeout');
			document.getElementById("video-player").addEventListener("ended", function(e) {
				setTimeout(function () {
					parent.changeMedia()
				},300);
			});
		},500);
	}


	getData(){
		return this.data;
	}

	setData(data){
		this.data = data;
	}

	getActiveMedia(){

		if (this.data[this.currentIndex] !== undefined){
			if (this.data[this.currentIndex].type === 'video'){
				return 'video-player'
			}
		}
		return null;
	}
}
