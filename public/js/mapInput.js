function initialize() {
    var service = new google.maps.places.AutocompleteService();
    var area = '';
    var area_list = [];
    $('#city').change(function () {
       if ($('#city').val()) {
            $('#area').prop('disabled', false);
       } else {
           $('#area').val('');
           $('#area').prop('disabled', true);
       }
    });
    $('#area').keyup(function(){
        area = $('#city').val()+' '+$('#area').val();
        var request = {
            input: area,
        };
        //log(request);
        service.getPlacePredictions(request, google_addresses_callback);
        function google_addresses_callback(results, status) {console.log(results);
            if (status == google.maps.places.PlacesServiceStatus.OK) {
                var counter = 0;
                $.each(results, function (index, result) {
                    //log(result);
                    function in_array(value, array) {
                        for (var i = 0; i < array.length; i++) {
                            if (array[i] == value){
                                var formated = result.structured_formatting.main_text;
                                area_list[counter] = formated;
                                counter++;
                                return true;
                            }
                        }
                        return false;
                    }
                    if (in_array("sublocality_level_1", result.types)) {
                        //log(result);
                    }
                });
            }
        }
        $( "#area" ).autocomplete({
            source: area_list,
            focus: displayItem,
            select: displayItem,
            change: displayItem
        });
        function displayItem(event, ui) {
            if(ui.item){
                area = ui.item.label;
            }
        }
    })
}
