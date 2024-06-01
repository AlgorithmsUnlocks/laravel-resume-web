<section class="location-section">
    <h5 class="section-title">MY LOCATION</h5>

    <div class="map-wrapper embed-responsive embed-responsive-16by9" id="location_resume">

    </div>

</section>

<script>

    locationResume();
    async function locationResume() {
        let URL = "/locationResume";
        try {
            let response = await axios.get(URL);
            response.data.forEach((item) => {
                document.getElementById('location_resume').innerHTML +=
                    `
                     <iframe src="${item['url']}" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
                    `
            });
        } catch (e) {
            console.error(e);
        }
    }
</script>


