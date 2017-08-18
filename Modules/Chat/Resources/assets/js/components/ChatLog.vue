<template lang="html">
	 <div class="chat-log">
	 	<chat-message 
	 		v-for="message in messages" 
	 		:message="message"
	 		:key="message">
	 	</chat-message>
	 </div>	
</template>

<script>
	Vue.component('chat-message', require('./ChatMessage.vue'));
	export default { 
		props:['messages']
	}
</script>
<style lang="css">
</style>