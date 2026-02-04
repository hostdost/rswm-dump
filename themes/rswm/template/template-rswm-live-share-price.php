<?php
/*
 *Template Name: Live Share Price 
*/ 
?>
<?php get_header('less'); ?>
<div class="share-price" style="margin-top: 115px;">
    <div class="container">
        <div class="row">
		<h1 class="hider">Share Live Price</h1>
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_28209"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/NSE-RSWM/" rel="noopener" target="_blank"><span class="blue-text">RSWM</span> <span class="blue-text">chart</span> by TradingView</a></div>
</div>
<!-- TradingView Widget END -->
<div class="col span_12">
</div>
</div>
</div>
</div>
<script>
$(window).bind("load", function() {
   // code here
   $('.tradingview-widget-container').fadeIn();
});
</script>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 980,
  "height": 610,
  "symbol": "RSWM",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "Light",
  "style": "1",
  "locale": "in",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "hideideas": true,
  "container_id": "tradingview_28209"
}
  );
  </script>
<?php get_footer('less'); ?>
