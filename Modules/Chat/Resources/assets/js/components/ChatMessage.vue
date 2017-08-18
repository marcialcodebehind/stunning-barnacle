<template lang="html">
	 <div class="chat-message">
	 	<li class="out">
			<img class="avatar" alt="" src="assets/admin/layout/img/avatar1.jpg"/>
			<div class="message">
				<span class="arrow">
				</span>
				<a href="javascript:;" class="name">
				{{ message.user.name }} 
				</a>
				<span class="datetime">
				at 20:09 </span>
				<span class="body">
					{{ message.message }}
				</span>
			</div>
		</li>
	 </div>	
</template>

<script>
	export default {
		props: ['message']
	}
</script>
<style lang="css">
</style>