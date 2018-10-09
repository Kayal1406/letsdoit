var base_url = window.location.origin;

$(document).ready(function(){
    
    $.ajax(
    {
        type : 'GET',
        url: base_url+"/get-related-topics",
        success: function (data)
        {
            // Defining the local dataset
            var relatedConf = data;
            
            // Constructing the suggestion engine
            var relatedConf = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                local: relatedConf
            });
            $('.typeahead').typeahead({
                hint: true,
                highlight: true, /* Enable substring highlighting */
                minLength: 1 /* Specify minimum characters required for showing result */
            },
            {
                name: 'relatedConf',
                source: relatedConf
            });
        }
    });

    $('.typeahead').on('typeahead:selected', function(evt, item) {
        alert("This topic is already in discussion. Kindly look it before submitting.")
    });

}); 