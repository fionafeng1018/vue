<template>
  <div id="app">
    <!--Form Validation-->
    <form-validation></form-validation>
  </div>
</template>

<script>

import Message from './components/Message.vue';
import Counter from './components/Counter.vue';
import FormValidation from './components/FormValidation.vue'

export default {
  name: 'app',

  components:{
    Message,
    Counter,
    FormValidation
  },

  data () {
    return {

    }
  }
}
</script>

<style lang="scss">

</style>
