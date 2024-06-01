<section class="contact-section">
    <h2 class="section-title">GET IN TOUCH</h2>
    <p class="mb-4">If you’d like to talk about a project, our work or anything else then get in touch.</p>

    <div class="contact-cards-wrapper" id="contact-cards-wrapper">

    </div>

    <form class="contact-form" id="contactForm">

        <div class="form-group form-group-name">
            <label for="name" class="sr-only">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="NAME">
        </div>
        <div class="form-group form-group-email">
            <label for="email" class="sr-only">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="EMAIL">
        </div>
        <div class="form-group">
            <label for="message" class="sr-only">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="MESSAGE" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary form-submit-btn">SEND MESSAGE</button>

    </form>

</section>

<script>

    contact_infoResume();
    async function contact_infoResume(){
       try {
           let URL = "/contact_infoResume";
           let response = await axios.get(URL);
           response.data.forEach((item)=>{
               document.getElementById('contact-cards-wrapper').innerHTML +=
                   `
                <div class="contact-card">
                    <h6 class="contact-card-title">${item['small_title']}</h6>
                    <p class="contact-card-content">${item['small_description']}</p>
                </div>

               `
           });
       }catch (e) {
           console.log(e);
       }
    }


    // Contact push data to database using forms

   let contactForm = document.getElementById('contactForm')

    contactForm.addEventListener('submit',async (event)=>{

        event.preventDefault();
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let message = document.getElementById('message').value;

        let URL = "/contact_formsResume";
        let formData = {
            name: name,
            email: email,
            message: message
        }
        let result =await axios.post(URL, formData);
        if(result.status===200 && result.data===1){
            alert('Your request has been submitted successfully');
            contactForm.reset();
        }
        else{
            alert('Something went wrong')
        }
    })


</script>
