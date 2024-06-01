<section class="portfolio-section">
    <h2 class="section-title">PORTFOLIO</h2>

    <div class="portfolio-wrapper" id="portfolio-container">


    </div>

</section>

<script>
    portfolioResume();
    async function portfolioResume(){
        let URL = "/portfolioResume";
        let response = await axios.get(URL);
        response.data.forEach((item)=>{
           document.getElementById('portfolio-container').innerHTML +=
               `
                <figure class="portfolio-item hover-box">
                    <img src="${item['project_img']}" alt="project" class="portfolio-item-img">
                    <figcaption class="portfolio-item-details overlay">
                        <a href="${item['project_link']}"><h5 class="portfolio-item-title">${item['project_title']}</h5></a>
                        <p class="portfolio-item-description">${item['project_description']}</p>
                    </figcaption>
                </figure>

               `
        });
    }
</script>

