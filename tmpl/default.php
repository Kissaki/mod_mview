<?php
// no direct access
defined('_JEXEC') or die;
$baseurl = JURI::base();
?>
<div id="mview-container" class="mview-container<?php echo $moduleclass_sfx; ?>"></div>
<script type="text/javascript" src="<?php echo $baseurl; ?>modules/mod_mview/libs/mview/mview.js"></script>
<script type="text/javascript">
  var settings = {
    target: '#mview-container',
    source: '<?php echo $params->get('jsoncallbackurl'); ?>',
    resurl: '<?php echo $baseurl; ?>modules/mod_mview/libs/mview/',
    refreshinterval: <?php echo $refreshinterval; ?>
  };
  mv = new MView(settings);
  mv.load();
</script>