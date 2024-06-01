<section class="hero-intro-section">
    <h2 class="hero-section-title" id="hero-section-title"> </h2>
    <p id="hero-section-des"> </p>
    <a href="#!" class="btn btn-primary btn-hire-me mb-3">HIRE ME</a>
</section>

<script>
    heroResume();
    async function heroResume(){

        let URL = "/heroResume";

        document.getElementById('shimmerEffects').classList.remove('d-none');
        document.getElementById('shimmerContainer').classList.add('d-none');

        let response = await axios.get(URL);
        document.getElementById('hero-section-title').textContent = response.data['title'];
        document.getElementById('hero-section-des').textContent = response.data['description'];


        document.getElementById('shimmerEffects').classList.add('d-none');
        document.getElementById('shimmerContainer').classList.remove('d-none');
    }
</script>
