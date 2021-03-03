<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
             <b-card title="Edit Book">
                    <b-card-text>
                        <form v-on:submit.prevent="handleEdit">
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
                                <button class="btn btn-primary btn-block">Save</button>
                            </div>
                        </form>
                    </b-card-text>
                </b-card>
        </div>
    </div>
</template>
<script>
export default {
    props:['book_details'],
    data(){
        return{
            book:{
                id: this.book_details.id,
                name: this.book_details.name,
                description: this.book_details.description,
                content: this.book_details.content
            }
        }
    },
    methods:{
        handleEdit(){
            let postData = this.book;
            window.axios.post('/api/edit_book/'+postData.id, postData)
            .then(response=>{
                console.log(response);
                if(response.status == 201){
                    Swal.fire({
                        title: "Congratulations!",
                        text: "You have successfully edited the book!",
                        icon: "success",
				    }).then(setTimeout( function(){ window.location.href = "/all_books";}, 3000));
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