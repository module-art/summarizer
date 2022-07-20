<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Summarizer demo">
    <meta name="author" content="Sylvestre LAMBEY">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
   
    <section id="content" class="container">

      <section id="header" class="row justify-content-around">
        <a class="btn btn-success btn-lg" href="https://framagit.org/module-art/summarizer/-/archive/master/summarizer-master.zip" role="button"><i class="fas fa-download"></i> Download zip</a>
        <a class="btn btn-primary btn-lg" href="https://github.com/module-art/summarizer.git" role="button"><i class="fab fa-github"></i> View on Github</a>
      </section>

      <section class="row center-card">
        <div class="card col-12">
          <div class="card-header text-center">
            <h1>Summarizer Demo</h1>
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Analyze a text to automatically generate the summary.</h5>
            <h4 class="card-title text-center">Change the demo text as you want</h4>
            <div class="row justify-content-center mt-3">
              <div class="col-12 col-md-10 col-lg-8">
                <form>
                  <div class="form-group">
                    <textarea class="form-control" id="text" rows="15"></textarea> 
                  </div>
                  <div class="form-row justify-content-around">
                    <div class="form-group col-sm-2 col-md-3">
                      <label for="fromHeading">From Heading</label>
                      <input type="number" class="form-control" id="fromHeading">
                    </div>
                    <div class="form-group col-sm-2 col-md-3">
                      <label for="toHeading">To Heading</label>
                      <input type="number" class="form-control" id="toHeading">
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card-footer text-center">
              <button id="makeit" type="button" class="btn btn-primary btn-lg"><i class="fa-solid fa-gears"></i> Click to summarize</button>
            </div>
            <div class="row justify-content-center mt-3">
              <div class="col-10 col-md-8 col-lg-6" id="summary">
              </div>
            </div>
            <div class="card-text">
              <div class="row justify-content-center">
                <div id="live-display" class="col-12 col-md-10 col-lg-8">
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
<p>Texts from <a href="https://www.blindtextgenerator.com">blindtextgenerator.com</a></p>
          </div>
        </div>
      </section>

      <section id="main-card" class="card col-12">
        <div class="card-body">
          <h2 class="card-title">How to Use</h2>
          <h4 class="card-title">Summarizer require <a href="https://jquery.com/">Jquery</a></h4>
          <h5 class="card-title">HTML</h5>
          <p>Define the place to add the summary.</p>
          <pre>
<?php 
echo htmlspecialchars('<div id="summary"></div>');
?>
          </pre>
          <h5 class="card-title">Javascript</h5>
          <pre>
$('#yourTextWithManyHeadings').summarize({
  //option : 'set option'
});
          </pre>
          <h4 class="card-title">Options</h4>
          <h5 class="card-title">summaryId</h5>
          <p>Set id for the place to add summary. Default is "#summary".</p>
          <h5 class="card-title">fromHeading</h5>
          <p>First heading level considered. Default is 2.</p>
          <h5 class="card-title">toHeading</h5>
          <p>Limit above which headings are not considered. Default is 4.</p>
          <h5 class="card-title">linkClass</h5>
          <p>Define a class for each generated link to style it. Default is empty ("").</p>
          <h4 class="card-title">License</h4>
          <p class="text-muted">
            Summarizer v1.0<br>
            Copyright (C) 2022 Sylvestre Lambey <br>
            <br>
            This program is free software: you can redistribute it and/or modify<br>
            it under the terms of the GNU General Public License as published by<br>
            the Free Software Foundation, either version 3 of the License.<br>
            <br>
            This program is distributed in the hope that it will be useful,<br>
            but WITHOUT ANY WARRANTY; without even the implied warranty of<br>
            MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the<br>
            GNU General Public License for more details.<br>
            <a href="https://www.gnu.org/licenses/gpl.html">www.gnu.org/licenses/gpl.html</a>.<br>
            <a href="https://module-art.fr">Visit Module-Art</a>.<br>
            <a href="https://ricochets-figeac.fr/fiche/99/les-e-mails-la-confidentialite-et-le-chiffrement-avec-openpgp">A page using Summarizer</a>.
          </p>
        </div>
      </section>

    </section>

    <script src="js/fontawesome-6.1.1-all.min.js"></script>
    <script src="js/tinymce/tinymce.min.js"></script>
    <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/summarizer.js"></script>
    <script src="js/demo.js"></script>

  </body>
</html>
