<!DOCTYPE html>
<html class="js no-touchevents">
  <head>
    <title>Teasers | Accessibility Code Samples and Solutions</title>
    <?php include '../../include_meta.php';?>
  </head>
  <body class="presentation">
    <?php include '../../include_header.php';?>
    <main class="presentation__main">
      <h1>Teasers</h1>
      <!-- CodePen Code -->
      <p data-height="700" data-theme-id="0" data-slug-hash="MOmvwj" data-default-tab="html,result" data-user="kbeck303" data-embed-version="2" data-pen-title="Teasers: Accessibility Code Samples and Solutions" class="codepen">See the Pen <a href="https://codepen.io/kbeck303/pen/MOmvwj/">Teasers: Accessibility Code Samples and Solutions</a> by kbeck303 (<a href="https://codepen.io/kbeck303">@kbeck303</a>) on <a href="https://codepen.io">CodePen</a>.</p>
      <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>

      <h2>Notes, Tips, and Reference Materials</h2>
      <ol>
        <li>There are times when you can get very focused on what the screen reader output will be and how keyboard interactions will behave, that you'll forget about the hover states of elements.</li>
        <li>It would be worth looking at analytics to help guide which option you'd like to use for a solution. One solution has a very large trigger area, but this area might accidentaly get triggered while scrolling on mobile devices.</li>
        <li>Having two links go to the same place within the same card is not ideal for screenreaders, but average web users expect the image and the link/button to bring them somewhere.</li>
        <li>Using Twig templates and views with a content display (instead of fields) lets you quickly reuse HTML markup for similar content being displaying in different areas of the site or displaying different but similar content.</li>
      </ol>
    </main>
    <?php include '../../include_footer.php';?>
  </body>
</html>
