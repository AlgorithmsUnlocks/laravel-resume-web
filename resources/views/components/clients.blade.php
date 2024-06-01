<section class="clients-section">
    <h6 class="section-subtitle">WHAT I DO</h6>
    <h2 class="section-title">CLIENTS</h2>

    <div class="client-logos-wrapper" id="client-logos-wrapper">


    </div>


</section>

<script>
    clientsResume();
    async function clientsResume(){
        try {
            let URL = "/clientsResume";
            let response = await axios.get(URL);

            response.data.forEach((item)=>{

                document.getElementById('client-logos-wrapper').innerHTML +=
                    `
                <div class="client-logo">
                    <img src="${item['img']}" alt="logo" class="w-100">
                </div>

                `
            });
        }catch (e) {
            console.log(e);
        }
    }
</script>
