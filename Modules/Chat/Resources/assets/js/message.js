Vue.component('chat-log', require('./components/ChatLog.vue'));
Vue.component('chat-composer', require('./components/ChatComposer.vue'));

var app = new Vue({
    el: '#message_app',
    data: {
    	messages: [],
    	usersInRoom: [],
        username: username,
    },
    methods: {
    	addMessage(message) {
            var cont = $('#chats');

            var getLastPostPos = function () {
                var height = 0;
                cont.find("li.out, li.in").each(function () {
                    height = height + $(this).outerHeight();
                });
                return height+height;
            }

            cont.find('.scroller').slimScroll({
                scrollTo: getLastPostPos()
            });

    		//Add to existing messages
    		this.messages.push(message)
    		//Persist to the database
    		axios.post('chat/message', message).then(response => {

    		});
    	}
    },
    created() {
    	axios.get('chat/messages ').then(response => {
    		this.messages = response.data
    	});

    	Echo.join('chatroom') 
    		.here((users) => {
    			this.usersInRoom = users;
    		})
    		.joining((user) => {
    			this.usersInRoom.push(user);
    		})
    		.leaving((user) => {
    			this.usersInRoom = this.usersInRoom.filter(u => u != user)
    		})
    		.listen('MessagePosted', (e) => {
    			this.messages.push({
    				message: e.message.message,
    				user: e.user
    			});
    		});
    }
});