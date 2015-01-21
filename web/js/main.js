$(document).ready(function()
{

	function getHost() {
    var host = window.location.host;
    var url = window.location.protocol+"//"+host+"/";
    return url;
}
	$('#users-country').change(function(){
	 var region =$('#users-country').val();
	 //alert(region);
		$.ajax({
		'type':'get',
		'url':getHost()+'estate/web/user/create',
		'data':{'region':region},
		'success':function(data)
		{
		console.log(data);
		}
		
		});
	
	
	});

}
)