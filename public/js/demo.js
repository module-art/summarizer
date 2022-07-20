$(document).ready(function()
{
  var initFromH = 2,
      initToH = 4;
  $('#fromHeading').val(initFromH);
  $('#toHeading').val(initToH);

  $('#makeit').click(function(e){
    $('#summary').empty();
    $('#live-display').summarize({
      fromHeading : $('#fromHeading').val(),
      toHeading : $('#toHeading').val()
    });
  });

  tinymce.init({
    selector: 'textarea',
    plugins: 'code',
    menubar: false,
    branding: false,
    toolbar: 'undo redo | code | h1 h2 h3 h4 h5 h6',
    setup : function(ed) {
      ed
        .on("init", function(){
          tinymce.activeEditor.setContent(
            '<h1>Portez ce vieux sandwich.</h1>'+
            '<h2>Voyez ce jeu exquis wallon, de graphie en kit mais bref.</h2>'+
            "<p>Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l'alcôve ovoïde, où les bûches se consument dans l'âtre, ce qui lui permet de penser à la cænogenèse de l'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre.</p>"+
            "<h3>Prouvez, beau juge, que le fameux sandwich au yak tue.</h3>"+
            "<h4>Âne ex æquo au whist, Ôtez ce vœu déçu.</h4>"+
            "<p>Vieux pelage que je modifie : breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! Fougueux, j'enivre la squaw au pack de beau zythum.</p>"+
            "<h2>Ketch, yawl, jonque flambant neuve… jugez des prix !</h2>"+
            "<h3>Voyez le brick géant que j'examine près du wharf.</h3>"+
            "<p>Portez ce vieux whisky au juge blond qui fume.</p>"+
            "<h4>Bâchez la queue du wagon-taxi avec les pyjamas.</h4>"+
            "<p>Voix ambiguë d'un cœur qui, au zéphyr, préfère les jattes de kiwis. Mon pauvre zébu ankylosé choque deux fois ton wagon jaune.</p>"+
            "<h5>L'île exiguë</h5>"+
            "<p>Où l'obèse jury mûr Fête l'haï volapük.</p>"+
            "<h3>Vieux pelage que je modifie :</h3>"+
            "<p>breitschwanz ou yak ? Dès Noël où un zéphyr haï me vêt de glaçons würmiens, je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge</p>"+
            "<h2>Perchez dix, vingt woks.</h2>"+
            "<p>Qu'y flambé-je ? Le moujik équipé de faux breitschwanz voyage. Kiwi fade, aptéryx, quel jambon vous gâchez ! Jugez qu'un vieux whisky blond pur malt fonce.</p>"+
            "<h2>Faux kwachas ?</h2>"+
            "<p>Quel projet de voyage zambien ! Fripon, mixez l'abject whisky qui vidange. Vif juge, trempez ce blond whisky aqueux.</p>"+
            "<h3>Vif P-DG mentor, exhibez la squaw jockey.</h3>"+
          "<h4>Juge, flambez l'exquis patchwork d'Yvon.</h4>"+
          "<p>Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l'alcôve ovoïde, où les bûches se consument dans l'âtre, ce qui lui permet de penser à la cænogenèse de l'être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre.</p>"
        );})
      .on("init", function(){
        $('#live-display').html(tinymce.activeEditor.getContent());})
      .on("nodeChange", function(){
        $('#live-display').html(tinymce.activeEditor.getContent());})
      .on("keyup", function(){
        $('#live-display').html(tinymce.activeEditor.getContent());});
    }
  });

});
