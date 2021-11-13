<template>

    <input 
        type="submit"
        class="text-white btn btn-success"
        @click="btnGuardar"
        value="Guardar"
    >
                                     
   

</template>
    
<script>
// class="text-white btn btn-success"

//<i class="bi bi-box-arrow-in-up"></i>   
    export default {
        
        props: ['appId'],
        mounted() {
            console.log('receta actual: ', this.appId);
        },
        methods:{
            btnGuardar(){

                /*  const params = {
                            id: this.recetaId
                } */



                this.$swal(
                    {
                        title: 'Actualización exitosa',
                        text: 'Cambios guardados exitosamente',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 5000
                    }
                )
                /* .then( () =>{
                    
                }) */;
            }
        }
    }

</script>
    

