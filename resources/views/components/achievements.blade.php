<section class="achievements-section">
    <h6 class="section-subtitle">WHAT I DO</h6>
    <h2 class="section-title">ACHIEVEMENTS</h2>

    <div class="achievement-cards-wrapper" id="achievement-cards-wrapper">

    </div>

</section>

<script>

    achievementsResume();
    async function achievementsResume(){
       try {
           let URL = "/achievementsResume";
           let response = await axios.get(URL);
           response.data.forEach((item)=>{
               document.getElementById('achievement-cards-wrapper').innerHTML +=

                   `
           <div class="media achievement-card">
                <img src="${item['icon']}" alt="puzzle" class="achievement-card-icon">
                <div class="media-body">
                    <h4 class="achievement-card-title">${item['count']}</h4>
                    <p class="achievement-card-description">${item['title']}</p>
                </div>
            </div>

           `

           });
       }catch (e) {
           console.log(e);
       }
    }
</script>
