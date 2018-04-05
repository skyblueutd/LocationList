$(document).ready(function(){
    $('#country').on('change',function(){
        $countryid=$(this).val();
        if($countryid){
            $.ajax({
                type:"POST",
                url:"update.php",
                data:{country:$countryid},
                success:function(data){
                    console.log(data);
                    $('#state').html(data);
                }
            });
        }

    });
    
    $('#state').on('change',function(){
        $stateid=$(this).val();
        if($stateid){
            $.ajax({
                type:"POST",
                url:"update.php",
                data:{state:$stateid},
                success:function(data){
                    console.log(data);
                    $('#city').html(data);
                }
            });
        }

    });
    
});

