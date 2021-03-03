<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <b-card title="Create Book">
                    <b-card-text>
                        <form v-on:submit.prevent="handleSubmit">
                            <div class="form-group">
                                <label>Book Name</label>
                                <input type="text" class="form-control" placeholder="Enter Book Name" v-model="book.name">
                            </div>
                            <div class="form-group">
                                <label>Book Description</label>
                                <textarea name="description" id="description" class="form-control" cols="30" rows="5" placeholder="Enter Description here" v-model="book.description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Book Content</label>
                                 <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Enter Content here" v-model="book.content"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block">Create</button>
                            </div>
                        </form>
                    </b-card-text>
                </b-card>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            book:{
                name: '',
                description: '',
                content: ''
            }
        }
    },
    methods:{
        handleSubmit(){
            let postData = this.book;
            window.axios.post('/api/create_book', postData)
            .then(response=>{
                console.log(response);
                if(response.status == 201){
                    Swal.fire({
                        title: "Congratulations!",
                        text: "You have successfully created a book!",
                        icon: "success",
				    }).then(setTimeout( function(){ window.location.href = "all_books";}, 3000));
                }
                else{
                    Swal.fire({
                        title: "Error!",
                        text: data,
                        icon: "error",
                    });
                }
            })
            .catch(err=>{
                console.log(err);
                if(err.response.status == 422){
                    Swal.fire({
                        title: "Error!",
                        text: "Empty field(s) found",
                        icon: "error",
                    });
                }
            });
        }
    }
}
</script>