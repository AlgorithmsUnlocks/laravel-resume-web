<div class="widget card">
    <div class="card-body">
        <h5 class="widget-title card-title">INTERESTS</h5>

        <div class="widget-content" id="widget-content-interest">

        </div>

    </div>
</div>


<script>
    interestResume();
    async function interestResume(){

        let URL= "/interestResume";
        let response = await axios.get(URL);
        response.data.forEach((items)=>{
            document.getElementById('widget-content-interest').innerHTML +=
                `
                <p>${items['title']}</p>

                `
        })
    }


</script>
