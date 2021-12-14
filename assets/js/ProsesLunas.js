/**
 * @author Kishor Mali
 */


jQuery(document).ready(function(){
	
	jQuery(document).on("click", ".UserLunas", function(){
		var userId = $(this).data("Proses_Lunas"),
			hitURL = baseURL + "transaksi/selesai_bayar",
			currentRow = $(this);
		
		var confirmation = confirm("Sudah Bayar Lunas?");
		
		if(confirmation)
		{ 
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { userId : userId } 
			}).done(function(data){
				console.log(data);
				currentRow.parents('tr').remove();
				if(data.status = true) { 
					alert("User successfully Lunas"); 
				}	
				else if(data.status = false) { 
					alert("User Lunas failed"); 
				}
				else { 
					alert("Access denied!"); 
				}
			});
		}
	});	
});
