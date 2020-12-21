// Route 
var rToDjango = "http://202.157.187.161:7001/product/all";
var rToSearchArea = server + "product/check-area-slug-only";

document.querySelector('#txtCariLokasi').addEventListener('keyup', function(data){
    let slug = document.querySelector('#txtCariLokasi').value;
    let datasend = {'slug':slug}
    if(slug.length < 4){
        document.querySelector('#resultSearchArea').innerHTML = "";
    }else{
        axios.post(rToSearchArea, datasend).then(function(res){
            let dataView = res.data;
            document.querySelector('#resultSearchArea').innerHTML = dataView;
            console.log(res.data);
        });
    }
   
});

function tesKeDjango()
{

}