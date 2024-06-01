<section class="testimonial-section">

    <div id="testimonialCarousel" class="testimonial-carousel carousel slide" data-ride="carousel">

        <div class="carousel-inner" id="carousel-inner">


        </div>

        <ol class="carousel-indicators">
            <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#testimonialCarousel" data-slide-to="1"></li>
            <li data-target="#testimonialCarousel" data-slide-to="2"></li>
        </ol>

    </div>
</section>

<script>

    reviewsResume();
    async function reviewsResume(){
        try {
            let URL = "/reviewsResume";
            let response = await axios.get(URL);
            response.data.forEach((item)=>{
                document.getElementById('carousel-inner').innerHTML +=
                    `
               <div class="carousel-item active">
                    <p class="testimonial-content">${item['contents']}</p>
                    <img src="${item['img']}" alt="profile" class="testimonial-img">
                    <p class="testimonial-name">${item['name']}</p>
                </div>

               `
            });
        }catch (e) {
            console.log(e);
        }
    }

</script>
