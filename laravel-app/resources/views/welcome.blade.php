<html>
    <head>
    </head>
    <body>
        
        <h1>hi fiona</h1>
        <p>this is nice</p>

        <input type="text" id="theinput">
        <button onclick="buttonWasClicked()">click me</button>
        <div id="moredata"></div>


        <div id="root">
            <ul>
                <li v-for="cat in cats" v-text="cat"></li>
            </ul>
        
        </div>


        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script src="/js/app.js"></script>
        <script>
        // function buttonWasClicked() {
        //     axios.post('/api/contact', {
        //         name: '',
        //         phone_number: '',
        //     }).then(response => {
        //         document.getElementById('moredata').innerHTML = response.data;
        //     }).catch(error => {
        //         // 422 error.name == name must be unique 
        //         document.getElementById('error').innerHTML = "You must provide a unique name."
        //     })
        // }
        </script>
    </body>
</html>
