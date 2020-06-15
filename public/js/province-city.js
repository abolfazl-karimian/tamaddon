    $('#state').change(function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:"GET",
                url:"{{url('get-cities')}}/"+stateID,
                success:function(res){
                    if(res){
                        $("#city").empty();
                        $("#city").append('<option>Select</option>');
                        $.each(res,function(key,value){
                            $("#city").append('<option value="'+key+'">'+value+'</option>');
                        });

                    }else{
                        $("#state").empty();
                    }
                }
            });
        }else{
            $("#state").empty();
            $("#city").empty();
        }
    });
