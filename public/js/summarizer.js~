/*@preserve
  Summarizer v1.0 (https://summarizer.module-art.fr/)
  Copyright (C) 2022 Sylvestre Lambey 

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <https://www.gnu.org/licenses/gpl.html>.
*/

(function ( $ ) {
 
  $.fn.summarize = function( options ) {

    // This is the easiest way to have default options.
    var settings = $.extend({
        // These are the defaults.
      summaryId : "#summary",
      fromHeading : 2,
      toHeading : 4,
      linkClass : ""
    }, options );

    var inc = 0,
        previousIs = 0,
        currentIs = 0,
        fromH = settings.fromHeading,
        HeadingRegex = /h(\d)/i;

    $(settings.summaryId).append('<ol></ol>');

    this.children().each(function(){
      if($(this).is("h"+fromH)){
        var title = $(this),
            titlecontent = stripTags( title.html() ),
            slugcontent = convertToSlug(titlecontent);
        previousIs = fromH;
        currentIs = fromH;
        inc++;
        $(settings.summaryId+' ol').append('<li><a class="'+settings.linkClass+'" href="#'+slugcontent+inc+'">'+titlecontent+'</a></li>');
        title.attr('id', slugcontent+inc);
      }else if(HeadingRegex.test($(this)[0].tagName)){//it is a heading tag
        currentIs = $(this)[0].tagName.replace(HeadingRegex, "$1");
        inc++;
        if(currentIs <= settings.toHeading){
          if(previousIs < currentIs){
            if(currentIs-previousIs > 1){
              alert('Summarizer cannot skip steps in incrementing headers. You jumped from H'+ previousIs + ' to H' + currentIs +'.' );
              return false;
            }
            $(settings.summaryId+' li').last().append('<ul class="'+currentIs+'ul"></ul>');
            previousIs = currentIs;
          }else if(previousIs > currentIs){
            previousIs = currentIs;
          }
          var subtitlecontent = stripTags( $(this).html() ),
              subslugcontent = convertToSlug(subtitlecontent);
          $(settings.summaryId+' .'+currentIs+'ul').last().append('<li><a class="'+settings.linkClass+'" href="#'+subslugcontent+inc+'">'+subtitlecontent+'</a></li>');
          $(this).attr('id', subslugcontent+inc);
        }
      }
    });

    function convertToSlug(Text)
    {
      return Text
          .toLowerCase()
          .replace(/ /g,'')
          .replace(/[^\w-]+/g,'')
          ;
    }
    function stripTags(htmlString)
    {
      return htmlString.replace(/(<([^>]+)>)/gi,'');
    }

  }
}( jQuery ));
