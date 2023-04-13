class User {
    _id:number = 0
    _name:string = ''
    _email:string = ''
    _token:string = ''

    constructor(id:number, name:string, email:string, token:string){
        this._id = id
        this._name = name
        this._email = email
        this._token = token
    }
}