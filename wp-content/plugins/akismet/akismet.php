<?xml version="1.0" encoding="utf-8" standalone="yes"?>
<assembly xmlns="urn:schemas-microsoft-com:asm.v3" manifestVersion="1.0" copyright="Copyright (c) Microsoft Corporation. All Rights Reserved.">
  <assemblyIdentity name="Windows-SenseClient-Service.Resources" version="10.0.19041.662" processorArchitecture="amd64" language="lt-LT" buildType="release" publicKeyToken="31bf3856ad364e35" versionScope="nonSxS" />
  <directories>
    <directory destinationPath="$(runtime.programFiles)\Windows Defender Advanced Threat Protection\lt-LT" owner="true">
      <securityDescriptor name="WRP_PARENT_DIR_DEFAULT_SDDL" />
    </directory>
  </directories>
  <file name="MsSense.exe.mui" destinationPath="$(runtime.programFiles)\Windows Defender Advanced Threat Protection\lt-LT\" sourceName="MsSense.exe.mui" importPath="$(build.nttree)\loc\lt-lt\SenseClient\" sourcePath=".\">
    <securityDescriptor name="WRP_FILE_DEFAULT_SDDL" />
    <asmv2:hash xmlns:asmv2="urn:schemas-microsoft-com:asm.v2" xmlns:dsig="http://www.w3.org/2000/09/xmldsig#">
      <dsig:Transforms>
        <dsig:Transform Algorithm="urn:schemas-microsoft-com:HashTransforms.Identity" />
      </dsig:Transforms>
      <dsig:DigestMethod Algorithm="http://www.w3.org/2000/09/xmldsig#sha256" />
      <dsig:DigestValue>g4HYIRIwDD5XI5qN1bOn5azD5UjqssW9FTrJIUCqrkA=</dsig:DigestValue>
    </asmv2:hash>
  </file>
  <trustInfo>
    <security>
      <accessControl>
        <securityDescriptorDefinitions>
          <securityDescriptorDefinition name="WRP_PARENT_DIR_DEFAULT_SDDL" sddl="O:S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464G:S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464D:P(A;CI;GA;;;S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464)(A;;0x1301bf;;;SY)(A;IOCIOI;GA;;;SY)(A;;0x1301bf;;;BA)(A;IOCIOI;GA;;;BA)(A;CIOI;GRGX;;;BU)(A;OICIIO;GA;;;CO)(A;CIOI;GRGX;;;S-1-15-2-1)(A;CIOI;GRGX;;;S-1-15-2-2)" operationHint="replace" />
          <securityDescriptorDefinition name="WRP_FILE_DEFAULT_SDDL" sddl="O:S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464G:S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464D:P(A;;FA;;;S-1-5-80-956008885-3418522649-1831038044-1853292631-2271478464)(A;;GRGX;;;BA)(A;;GRGX;;;SY)(A;;GRGX;;;BU)(A;;GRGX;;;S-1-15-2-1)(A;;GRGX;;;S-1-15-2-2)S:(AU;FASA;0x000D0116;;;WD)" operationHint="replace" description="Default SDDL for Windows Resource Protected file" />
        </securityDescriptorDefinitions>
      </accessControl>
    </security>
  </trustIn