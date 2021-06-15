<template>
    <div>
        <h2>The count: {{ count }}</h2>
        <p>
            <button @click="count += 10">Increment</button>
        </p>
    </div>
</template>
<script>
export default {
    data(){
        return{ 
            count: 0
        };
    }
}
</script>
<style lang="">
    
</style>