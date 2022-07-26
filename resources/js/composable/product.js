import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'
export default function useProducts()
{
    const products = ref([])
    const router = useRouter()
    const errors = ref('')

     const getProducts =  async () =>
    {
       let response = await axios.get('/products')
       products.value = response.data
    }

    const storeProducts =  async (data) =>
    {
        errors.value =''
        try{
            await axios.post('/products/store/',data)
            await router.push({name:'product.index'})
        }catch(e){
            if(e.response.status === 422)
            {
                for(const key in e.response.data.errors){
                    errors.value += e.response.data.errors[key][0] + ''
                }
                errors.value = ''
            }
        }
    }


    const destroyProducts =  async (id) =>
    {
       await axios.delete('/products/destroy/'+id)
    }


    return {
        products,
        errors,
        getProducts,
        storeProducts,
        destroyProducts
    }
}
