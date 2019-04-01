export const getters = {
    authenticated(state) {
        return state.loggedIn;
    },
    user (state) {
        return user.state;
    }

}