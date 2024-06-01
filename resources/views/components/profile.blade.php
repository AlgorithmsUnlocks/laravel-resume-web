<div class="profile-img-wrapper">
    <img src="{{asset('assets/images/ruman_ahmed.png')}}" alt="profile">
</div>
<h1 class="profile-name" id="profileName">Ruman Ahmed</h1>
<div class="text-center">
    <span class="badge badge-white badge-pill profile-designation" id="profileTitle">Web Development Expert</span>
</div>

<nav class="social-links" id="social-links">

</nav>

<div class="widget">
    <h5 class="widget-title">personal information</h5>
    <div class="widget-content">
        <p>BIRTHDAY : <span id="birthday">  15 April 1990 </span></p>
        <p>WEBSITE : <span id="website"> www.example.com </span> </p>
        <p>PHONE : <span  id="phone"> +1 123 000 4444 </span> </p>
        <p>MAIL : <span id="mail"> your@example.com </span> </p>
        <p>Location : <span id="location"> California, USA </span></p>
        <button class="btn btn-download-cv btn-primary rounded-pill"> <img src="{{asset('assets/images/download.svg')}}" alt="download"
                                                                           class="btn-img">DOWNLOAD CV </button>
    </div>
</div>

<script>


    //CSR - socials part

    socialsResume();
    async function socialsResume(){
       try{

           let URL = "/socialsResume";
           document.getElementById('shimmerEffects').classList.remove('d-none');
           document.getElementById('shimmerContainer').classList.add('d-none');
           let response = await axios.get(URL);

           response.data.forEach((item)=>{
               document.getElementById('social-links').innerHTML +=

                   `
                <a href="${item['socials_links']}" class="social-link"><i class="${item['name']}"></i></a>

                `
           });
           document.getElementById('shimmerEffects').classList.add('d-none');
           document.getElementById('shimmerContainer').classList.remove('d-none');
       }catch (e){
           console.log(e);
       }
    }

    //CSR - profile information
    profileResume()
    async function profileResume(){
        try {

            let URL = "/profileResume";

            document.getElementById('shimmerEffects').classList.remove('d-none');
            document.getElementById('shimmerContainer').classList.add('d-none');

            let response = await axios.get(URL);

            document.getElementById('profileName').innerHTML = response.data['name'];
            document.getElementById('profileTitle').innerHTML = response.data['title'];
            document.getElementById('birthday').innerHTML = response.data['birthday'];
            document.getElementById('website').innerHTML = response.data['website'];
            document.getElementById('phone').innerHTML = response.data['phone'];
            document.getElementById('mail').innerHTML = response.data['mail'];
            document.getElementById('location').innerHTML = response.data['location'];

            document.getElementById('shimmerEffects').classList.add('d-none');
            document.getElementById('shimmerContainer').classList.remove('d-none');

        }catch (e){
            console.log(e);
        }
    }

</script>


