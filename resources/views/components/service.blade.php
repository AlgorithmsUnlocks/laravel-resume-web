<section class="services-section">
    <h6 class="section-subtitle">WHAT I DO</h6>
    <h2 class="section-title">SERVICES</h2>


    <div class="row" id="service-container">


    </div>

</section>

<script>
    serviceResume();
    async function serviceResume(){
       try {
           let URL = "/serviceResume";
           let response = await axios.get(URL);
           response.data.forEach((item)=>{
               document.getElementById('service-container').innerHTML +=
                   `
                <div class="media service-card col-lg-6">
                    <div class="service-icon">
                        <img src="${item['icon']}" alt="target">
                    </div>
                    <div class="media-body">
                        <h5 class="service-title">${item['title']}</h5>
                        <p class="service-description">${item['description']}</p>
                    </div>
                </div>

               `
           });
       }catch (e) {
           console.log(e);
       }
    }
</script>


