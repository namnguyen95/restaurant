{config_load file="define.conf"}
<!DOCTYPE html>
<html lang="en">
{block name="head"}{include file="head.tpl"}{/block}
<body>
<!-- Start Page Loading --> 
{include file="pageloader.tpl"} 
<!-- End Page Loading --> 

<!-- //////////////////////////////////////////////////////////////////////////// --> 

<!-- START HEADER -->
{include file="top_header.tpl"} 
<!-- END HEADER --> 

<!-- //////////////////////////////////////////////////////////////////////////// --> 

<!-- START MAIN -->
<div id="main"> 
  <!-- START WRAPPER -->
  <div class="wrapper"> 
    
    <!-- START LEFT SIDEBAR NAV-->
    {include file="left_nav.tpl"}
    <!-- END LEFT SIDEBAR NAV--> 
    
    <!-- //////////////////////////////////////////////////////////////////////////// --> 
    
    <!-- START CONTENT -->
    <section id="content"> 
      
      <!--start container-->
      <div class="container">
      {if isset($view)}
        {include file="$view"}
      {/if}  
      </div>
      <!--end container--> 
    </section>
    <!-- END CONTENT --> 
    
    <!-- //////////////////////////////////////////////////////////////////////////// --> 
    <!-- START RIGHT SIDEBAR NAV-->
    {include file="right_nav.tpl"}
    <!-- LEFT RIGHT SIDEBAR NAV--> 
    
  </div>
  <!-- END WRAPPER --> 
  
</div>
<!-- END MAIN --> 

<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START FOOTER -->
{block name="footer"}{include file="footer.tpl"}{/block}
<!-- END FOOTER --> 

<!-- ================================================
  Scripts
  ================================================ --> 
{block name="script"}{include file="script.tpl"}{/block}
</body>
</html>