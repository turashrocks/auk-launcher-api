<template>
  <div class="container-fluid col-md-8 mt-5">
    <h2>Register</h2>
    <br>
    <form @submit.prevent="submit">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="form-group col-md-6">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
            </div>
            <div class="form-row">
                <div class="col-12">
                <label for="inputAddress">Address</label>
                </div>
                <div class="col-7">
                <input type="text" class="form-control" placeholder="Address">
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="City">
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="Zip">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Status
                </label>
                </div>
            </div>
            <div class="form-group">
            <label for="inputEmail4">
                    Define Groups  
            </label>
           
           <div class="col-md-12" style="padding-left: 0px; padding-right: 0px;">
                <div class="form-check form-check-inline">
                    <label class="form-check-label" for="inlineCheckbox1"></label>
                    <div class="card" style="width: 18rem;">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" style="position: absolute;">
                        <img class="card-img-top" src="http://placehold.jp/100x180.png" alt="Card image cap" style="height: 180px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label" for="inlineCheckbox1"></label>
                    <div class="card" style="width: 18rem;">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" style="position: absolute;">
                        <img class="card-img-top" src="http://placehold.jp/100x180.png" alt="Card image cap" style="height: 180px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label" for="inlineCheckbox1"></label>
                    <div class="card" style="width: 18rem;">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" style="position: absolute;">
                        <img class="card-img-top" src="http://placehold.jp/100x180.png" alt="Card image cap" style="height: 180px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label" for="inlineCheckbox1"></label>
                    <div class="card" style="width: 18rem;">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4" style="position: absolute;">
                        <img class="card-img-top" src="http://placehold.jp/100x180.png" alt="Card image cap" style="height: 180px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
           </div>
           </div>
            <button type="submit" class="btn btn-primary">Register</button>
      
      </form>
    <br>
    <p>Already have an account? <nuxt-link to="/login">Login</nuxt-link></p>
  </div>
</template>

<script>
  export default {
    // middleware: ['guest'],
    // data() {
    //   return {
    //     form: {
    //       email: '',
    //       name: '',
    //       password: ''
    //     }
    //   }
    // },
    // methods: {
    //   async submit() {
    //     await this.$axios.$post('register', this.form)
    //     await this.$auth.loginWith('local', {
    //       data: {
    //         email: this.form.email,
    //         password: this.form.password
    //       }
    //     })
    //     // redirect
    //     this.$router.push({
    //       path: this.$route.query.redirect || "/dashboard"
    //     })
    //   }
    // }
  }
</script>

<style scoped>
.input#inlineCheckbox1.form-check-input{
    position: absolute !important;
}

</style>









