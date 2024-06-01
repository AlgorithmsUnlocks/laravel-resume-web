<section class="blog-section">
    <h2 class="section-title">LATEST NEWS</h2>

    <div class="blog-posts-wrapper" id="blog-posts-wrapper">

    </div>

</section>


<script>

    blogResume();
    async function blogResume(){
        try {
            let URL = "/blogResume";
            let response = await axios.get(URL);
            response.data.forEach((item)=>{
                document.getElementById('blog-posts-wrapper').innerHTML +=

                    `
               <article class="blog-post">
                    <a href="#!" class="blog-post-link">
                        <img src="${item['img']}" alt="news 1" class="blog-post-thumbnail">
                        <h5 class="blog-post-title">${item['title']}</h5>

                    </a>
                    <p class="blog-post-meta">
                        <span class="post-published-date">${item['created_at']}</span>
                        <a href="#!" class="post-comments">${item['comments_count']} </a>
                    </p>
                </article>

              `
            });
        }catch (e){
            console.log(e);
        }
    }
</script>
