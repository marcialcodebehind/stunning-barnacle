<template lang="html">
	 <div class="chat-composer">
	 	<div class="chat-form">
			<div class="input-cont">
				<input class="form-control" type="text" placeholder="Type a message here..." v-model="messageText" @keyup.enter="sendMessage" />
			</div>
			<div class="btn-cont">
				<span class="arrow">
				</span>
				<button class="btn blue icn-only" @click="sendMessage">
				<i class="fa fa-check icon-white"></i>
				</button>
			</div>
		</div>
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
							name: username
						}
					});
					this.messageText = '';
				}
			}
		}
	}
</script>
<style lang="css">
	/*.chat-composer{
		display: flex;
	}

	.chat-composer input {
		flex:  auto;
	}

	.chat-composer button {
		border-radius: 0;
	}*/
</style>