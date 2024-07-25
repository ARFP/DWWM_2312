export class DataProvider 
{
    static async getJson(_url) {
        try {
            let r = await fetch(_url);
            return await r.json();
        } catch(error) {
            console.error(error);
        }
    }
}