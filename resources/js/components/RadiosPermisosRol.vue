<template>
    <input 
        type="radio"
        class="form-check-input"
        name="rol"
        v-on:click="MostraPermisosApps"

    >
</template>

<script>
            export default {
                props: ['rolId'],
                mounted(){
                    console.log('Rol actual: ',this.rolId);
                },
                methods: {
                    MostraPermisosApps(){
                        try{
                            // console.log('Rol actual: ',this.rolId);
                   
                        
                            const params= {
                                id:this.rolId
                            }
            
                            axios.get(`/permisos-rol/${this.rolId}`,{params, _method: 'show'})
                            .then(respuesta=>{
                            // console.log(respuesta);
                                // console.log(data);
            
                                // alert(respuesta);
                            });
        
                        }
                        catch{
                        /*  .catch(error => { */
                                    this.$swal({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'No se puede concluir la operación, ¡intenta más tarde!',
                                    footer: error
                                    });
                            /*  })  */
                        }
                    }
                },
            }

</script>