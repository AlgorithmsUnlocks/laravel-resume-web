<div class="widget card">

    <div class="card-body">

        <h5 class="widget-title card-title">LANGUAGES</h5>

        <div class="widget-content" id="widget-content">

        </div>


    </div>
</div>

<script>
    languageResume();
    async function languageResume(){

       try {
           let URL = "/languageResume";

           document.getElementById('shimmerEffects').classList.remove('d-none');
           document.getElementById('shimmerContainer').classList.add('d-none');

           let response = await axios.get(URL);
           response.data.forEach((item)=>{
               document.getElementById('widget-content').innerHTML +=
                   `
                 <p>${item['title']} : <span style="text-transform: capitalize"> ${item['value']} </span> </p>
                `
           })

           document.getElementById('shimmerEffects').classList.add('d-none');
           document.getElementById('shimmerContainer').classList.remove('d-none');
       }catch (e){
           console.log(e);
       }
    }
</script>


