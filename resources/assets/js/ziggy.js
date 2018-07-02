    var Ziggy = {
        namedRoutes: {"home":{"uri":"\/","methods":["GET","HEAD"],"domain":null},"contact":{"uri":"contact","methods":["GET","HEAD"],"domain":null},"messages.mod":{"uri":"contact","methods":["POST"],"domain":null},"about":{"uri":"about","methods":["GET","HEAD"],"domain":null},"blogs":{"uri":"blogs","methods":["GET","HEAD"],"domain":null},"blogs.show":{"uri":"blogs\/{blog}","methods":["GET","HEAD"],"domain":null},"blogs.create":{"uri":"blog\/create","methods":["GET","HEAD"],"domain":null},"blogs.store":{"uri":"blogs","methods":["POST"],"domain":null},"blogs.index":{"uri":"MyBlogs","methods":["GET","HEAD"],"domain":null},"blogs.edit":{"uri":"MyBlogs\/edit\/{blog}","methods":["GET","HEAD"],"domain":null},"blogs.update":{"uri":"MyBlogs\/update\/{blog}","methods":["PUT"],"domain":null},"blogs.delete":{"uri":"MyBlogs\/{blog}","methods":["DELETE"],"domain":null},"profiles.index":{"uri":"MyProfile","methods":["GET","HEAD"],"domain":null},"summoner.index":{"uri":"MySummoner","methods":["GET","HEAD"],"domain":null},"summoner.create":{"uri":"MySummoner","methods":["POST"],"domain":null},"admin":{"uri":"admin","methods":["GET","HEAD"],"domain":null},"admin.contact":{"uri":"admin\/contact","methods":["GET","HEAD"],"domain":null},"admin.contact.delete":{"uri":"admin\/contact\/{contact}","methods":["DELETE"],"domain":null},"admin.blogs":{"uri":"admin\/blogs","methods":["GET","HEAD"],"domain":null},"admin.blogs.create":{"uri":"admin\/blogs\/create","methods":["GET","HEAD"],"domain":null},"admin.blogs.store":{"uri":"admin\/blogs","methods":["POST"],"domain":null},"admin.blogs.edit":{"uri":"admin\/blogs\/edit\/{blog}","methods":["GET","HEAD"],"domain":null},"admin.blogs.update":{"uri":"admin\/blogs\/{blog}","methods":["PUT"],"domain":null},"admin.blogs.delete":{"uri":"admin\/blogs\/{blog}","methods":["DELETE"],"domain":null},"admin.categories":{"uri":"admin\/categories","methods":["GET","HEAD"],"domain":null},"admin.categories.create":{"uri":"admin\/categories\/create","methods":["GET","HEAD"],"domain":null},"admin.categories.store":{"uri":"admin\/categories","methods":["POST"],"domain":null},"admin.categories.edit":{"uri":"admin\/categories\/edit\/{category}","methods":["GET","HEAD"],"domain":null},"admin.categories.update":{"uri":"admin\/categories\/{category}","methods":["PUT"],"domain":null},"admin.categories.delete":{"uri":"admin\/categories\/{category}","methods":["DELETE"],"domain":null},"login":{"uri":"login","methods":["GET","HEAD"],"domain":null},"logout":{"uri":"logout","methods":["POST"],"domain":null},"register":{"uri":"register","methods":["GET","HEAD"],"domain":null},"password.request":{"uri":"password\/reset","methods":["GET","HEAD"],"domain":null},"password.email":{"uri":"password\/email","methods":["POST"],"domain":null},"password.reset":{"uri":"password\/reset\/{token}","methods":["GET","HEAD"],"domain":null}},
        baseUrl: 'http://localhost/',
        baseProtocol: 'http',
        baseDomain: 'localhost',
        basePort: false,
        defaultParameters: []
    };

    export {
        Ziggy
    }
