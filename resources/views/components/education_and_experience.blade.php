<section class="resume-section">
    <div class="row">

        <div class="col-lg-6">

            <h6 class="section-subtitle">RESUME</h6>
            <h2 class="section-title">EDUCATION</h2>

            <ul class="time-line" id="education-resume">


            </ul>

        </div>

        <div class="col-lg-6">

            <h6 class="section-subtitle">RESUME</h6>
            <h2 class="section-title">Experience</h2>

            <ul class="time-line" id="experience-resume">


            </ul>

        </div>

    </div>
</section>

<script>

    //Education Resume JS Ajax CSR
    educationResume();
    async function educationResume(){
       try {
           let URL = "/educationResume";
           let response = await axios.get(URL);
           response.data.forEach((item)=>{
               document.getElementById('education-resume').innerHTML +=
                   `

                <li class="time-line-item">
                    <span class="badge badge-primary">${item['year']}</span>
                    <h6 class="time-line-item-title">${item['subject']}</h6>
                    <p class="time-line-item-subtitle">${item['university']}</p>
                    <p class="time-line-item-content">${item['description']}
                    </p>
                </li>

               `
           });
       }catch (e) {
           console.log(e);
       }
    }

    //Experience Resume JS Ajax CSR
    experienceResume();
    async function experienceResume(){
        try {
            let URL = "/experienceResume";
            let response = await axios.get(URL);
            response.data.forEach((item)=>{
                document.getElementById('experience-resume').innerHTML +=
                    `

                 <li class="time-line-item">
                    <span class="badge badge-primary">${item['year']}</span>
                    <h6 class="time-line-item-title">${item['title']}</h6>
                    <p class="time-line-item-subtitle">${item['company_name']}</p>
                    <p class="time-line-item-content">${item['company_description']}
                    </p>
                </li>

               `
            });
        }catch (e) {
            console.log(e);
        }
    }

</script>
