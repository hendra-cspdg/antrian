﻿namespace Linearstar.Windows.RawInput.Native
{
    /// <summary>
    /// CONFIGRET
    /// </summary>
    public enum ConfigReturnValue
    {
        Success = 0x0,
        Default = 0x1,
        OutOfMemory = 0x2,
        InvalidPointer = 0x3,
        InvalidFlag = 0x4,
        InvalidDevNode = 0x5,
        InvalidDevInst = 0x5,
        InvalidResDes = 0x6,
        InvalidLogConf = 0x7,
        InvalidArbitrator = 0x8,
        InvalidNodeList = 0x9,
        DevNodeHasReqs = 0xA,
        DevInstHasReqs = 0xA,
        InvalidResourceId = 0xB,
        DlvxdNotFound = 0xC,
        NoSuchDevNode = 0xD,
        NoSuchDevInst = 0xD,
        NoMoreLogConf = 0xE,
        NoMoreResDes = 0xF,
        AlreadySuchDevNode = 0x10,
        AlreadySuchDevInst = 0x10,
        InvalidRangeList = 0x11,
        InvalidRange = 0x12,
        Failure = 0x13,
        NoSuchLogicalDev = 0x14,
        CreateBlocked = 0x15,
        NotSystemVm = 0x16,
        RemoveVetoed = 0x17,
        ApmVetoed = 0x18,
        InvalidLoadType = 0x19,
        BufferSmall = 0x1A,
        NoArbitrator = 0x1B,
        NoRegistryHandle = 0x1C,
        RegistryError = 0x1D,
        InvalidDeviceId = 0x1E,
        InvalidData = 0x1F,
        InvalidApi = 0x20,
        DevloaderNotReady = 0x21,
        NeedRestart = 0x22,
        NoMoreHwProfiles = 0x23,
        DeviceNotThere = 0x24,
        NoSuchValue = 0x25,
        WrongType = 0x26,
        InvalidPriority = 0x27,
        NotDisableable = 0x28,
        FreeResources = 0x29,
        QueryVetoed = 0x2A,
        CantShareIrq = 0x2B,
        NoDependent = 0x2C,
        SameResourecs = 0x2D,
        NoSuchRegistryKey = 0x2E,
        InvalidMachineName = 0x2F,
        RemoteCommFailure = 0x30,
        MachineUnavailable = 0x31,
        NoCmServices = 0x32,
        AccessDenied = 0x33,
        CallNotImplemented = 0x34,
        InvalidProperty = 0x35,
        DeviceInterfaceActive = 0x36,
        NoSuchDeviceInterface = 0x37,
        InvalidReferenceString = 0x38,
        InvalidConflictList = 0x39,
        InvalidIndex = 0x3A,
        InvalidStructureSize = 0x3B,
    }
}
