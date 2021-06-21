export const ajax = ({ url, data, succes, method })=>{
    const option = {
        method,
        headers: {
            'Content-type': 'application/json',
        },
        body: JSON.stringify(data)
    }
    fetch(url, option)
     .then(res => res.ok ? res.json() : Promise.reject(res))
     .then(data => succes(data))
     .catch(err => console.error(err));
}