<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>

<head>
  <title>Software Testing Automation Framework (STAF)</title>
</head>

<body>

<?php
require "top.php";
require "navigate.php";
?>

<!-- Insert text for page here -->

<tr>
<td>

<center><h1>FSExt Service History</h1></center>
<PRE>
-------------------------------------------------------------------------------
History Log for FSExt Service  
  
  Legend:
   - Fixes
   + Features
   = Internal changes
   * Changes required to migrate from one release to another

  Notes:
  1) To get more information on each bug, use the following url, replacing
     Ticket# with the Bug#: https://sourceforge.net/p/staf/bugs/Ticket#/
     For example, to get more information on Bug #2982317, go to:
       https://sourceforge.net/p/staf/bugs/2982317/
  2) To get more information on each feature, use the following url, replacing
     Ticket# with the Feature#: https://sourceforge.net/p/staf/feature-requests/Ticket#/
     For example, to get more information on Feature #1867258, go to:
       https://sourceforge.net/p/staf/feature-requests/1867258/
  3) If you specify an old ticket number (i.e. created before June 2013 when
     the STAF project was upgraded to the new SourceForge developer platform),
     you'll be automatically redirected to the link with the new ticket number.
   
-------------------------------------------------------------------------------

Version 3.0.2: 12/15/2009

  - Improved error messages for invalid command requests and added exception
    catching when handling a service request (Bug #2895347)

-------------------------------------------------------------------------------

Version 3.0.1: 02/26/2008

  + Changed STAF license from the Common Public License (CPL) 1.0 to the
    Eclipse Public License (EPL) 1.0 (Feature #1893042)

-------------------------------------------------------------------------------

Version 3.0.0: 04/21/2005

  - Improved error message provided for RC 25 (Access Denied) for all requests
    (Bug #1054858)
  - Changed to use STAFUtil's common resolve variable methods (Bug #1151440)
  - Changed license from GPL to CPL for all source code (Bug #1149491)  

-------------------------------------------------------------------------------

Version 3.0.0 Beta 7a: 02/02/2005

  + Updated to return a marshalled results for the multi-valued results from
    COMPARDIR (No Exists), FILECONTAINS NOT, and LINECONTAINS requests
    (Feature #740150)
  - Changed to provide more information if an RC 25 (insufficient trust) occurs
  
-------------------------------------------------------------------------------

Version 3.0.0 Beta 7: 12/13/2004

  = Recompiled
  
-------------------------------------------------------------------------------

Version 3.0.0 Beta 6: 11/19/2004

  - Removed line separators from message text to display better
  
-------------------------------------------------------------------------------

Version 3.0.0 Beta 5: 10/30/2004

  + Changed to return STAFResult from init/term methods (Feature #584049)
  + Changed to use new STAFServiceInterfaceLevel30 (Feature #550251)
  
-------------------------------------------------------------------------------

Version 3.0.0 Beta 4: 09/29/2004

  = Recompiled

-------------------------------------------------------------------------------

Version 3.0.0 Beta 3: 06/28/2004

  + Added un-register of the service handle during term() (Feature #966079)
  
-------------------------------------------------------------------------------

Version 3.0.0 Beta 2: 04/29/2004

  + Updated to use STAFServiceInterfaceLevel5, only supported in STAF V3.0.0,
    and to use new syntax for the VAR service (Feature #464843) 
    
-------------------------------------------------------------------------------

Version 1.2.3: 02/27/2004

  + Instrumented the FSExt service's handling of COMPAREDIR, FILECONTAINS, and
    LINECONTAINS requests to record diagnostics data to help prepare for the
    migration to STAF V3.0.  The FSExt service requires STAF V2.6.0 or later as
    a result of this change. (Feature #853620)  

-------------------------------------------------------------------------------

Version 1.2.2: 10/09/2003

  - Fixed problem where FSExt was returning an incorrect error message when
    receiving an invalid command request (Bug #820920)

-------------------------------------------------------------------------------

Previous History is not available

-------------------------------------------------------------------------------
</PRE>

</td>
</tr>

<!-- end of text for page -->

<?php
require "bottom.php";
?>

</body>
</html>
