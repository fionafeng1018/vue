Vue.component('task-list',{

    template:`      
    <div>
        <task v-for="task in tasks">{{task.description}}</task>
    </div>
    `,

    data() {
        return {
            tasks:[
                {description: 'Play with Bambi', completed:true},
                {description: 'Feed Bambi', completed:true},
                {description: 'Clean the litter box', completed:true},
                {description: 'Afternoon playing with Bambi', completed:false}  
            ]
        }
    },

})




Vue.component('task', {

    template:'<li><slot></slot></li>'
})

new Vue({
    el: '#root'
})