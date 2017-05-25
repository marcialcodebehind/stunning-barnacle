<template lang="html">
	 <div class="chat-composer">
	 	<input type="text" placeholder="Type Message..." v-model="messageText" @keyup.enter="sendMessage">
	 	<button class="btn btn-primary" @click="sendMessage">Send</button>
	 </div>	
</template>

<script>
	export default { 
		data() {
			 return {
			 	messageText: ''
			 }
		},
		methods: {
			sendMessage() {
				if (this.messageText != '') {
					this.$emit('messagesent', {
						message: this.messageText,
						user: {
							name: 'Glenn'
						}
					});
					this.messageText = '';
				}
			}
		}
	}
</script>
<style lang="css">
	.chat-composer{
		display: flex;
	}

	.chat-composer input {
		flex:  auto;
	}

	.chat-composer button {
		border-radius: 0;
	}
</style>