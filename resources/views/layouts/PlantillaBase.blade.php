<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0">
        <title>Panadería</title>
        <link href="/css/style.css" rel="stylesheet">
        @yield('css')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </head>
    <body id="body-pd">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="background col-auto col-md-2 col-xl-2 px-sm-1 px-0">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <span class="align-items-center pb-2 fs-4 d-none d-sm-inline">Menu</span>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="/" class="nav-link align-middle px-0"> 
                                <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACaUlEQVR4nO2YP2gUQRTGR40KIoKgIEERREhhYaGNYKOVjbWFpWhtZRrtLOxSipY22thpoaCiMRFTKHYWKSw84eQ83/fN7vk/T8bMncN5cXfj7WYX5wcDx83Mm/fte/vm3RkTyabb7e4F8AjAA/fZNBFr7TEAbZLqR0dETpimoKrrSF4E8N0LuOOHAvhB8pJbY+pMp9PZBuC2d3oJwBVVXe/FTQfi7orIdlNHkiQ5SHLRO/phVBq579ycX7Po9oTzJOeCVPw1AMxWJkJETpNM/MEvRGTfSmt7vd4eks/92k8kzwRCdNQoXYCqTrj0CQ690Wq1tuTYtxnA9eCpX1PVTcOOVyIkTdPdJJ95Rz6TPFvUhtvjo6J9W6xSyFBpfSMih1dry+11NoLoLJUuxFefCwC++UPukdzxr3adDW9LXXRLFTKitF5W1Q3jsu9sAThvrT1VmhBr7QGSr73hjwBOmgrgOIW4J0TS+ki8EpH9piKw3AloGKXCqOpGkjNFS+s4AXA1OH/G+VTIAMmdrmP1UXAv9nRp3mb7cg7Al/4tn6bpZN6NRwG88xvfAjhi1hgROdQv0QDeW2uP51H/1W94nCTJLlMTuFyi74dZ8kcX3W63twK4GfY3rv0wNUNVJ4YaylvO98ECkgt+EpU1aquEv4X0fZ0fTAJ4CuAlgKmmCAEw5TptAA//utDUFOb1LwqpCMaI/G8R4Qq/t7NGFJJF6U+qqnMYhTBGpAiMqZWT+LI3LbVIzoX/rDe2/AKYBfCk7HMGxHuE8R4pBGNq5SSmVkEYU6vpqcWaD5OFu4HX2klmjLBDiERMufwEyiEsutW3LtcAAAAASUVORK5CYII=">
                                    <span class="ms-1 d-none d-sm-inline">Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/productos" class="nav-link align-middle px-0"> 
                                    <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABTUlEQVR4nO2WMU7DQBBFt0dcgRwgBVdCuRh0nAGSilTQUCAKTuDC0kr/ryOUKmiiLRBCsb1exR80T5pyZ+b7+68dwgCaprkg+ULycOZ6ttmhFiTvZhBxsAJwX0UEgFVu2qWUlgUP4bjQ2HMppaXNzGJWY8//1myXm92U9CgVYtjMPPuz67rrUIK9mwDe8yK3RU0mCjFsdu7x0bbtZSjNhYmZEripQppvD3R0XqbmoqaQ4rzUyEVtIUV5AfA211XL4Vfya6+QuZfkwBosJIhCFyIG3ZERxBgXADYA9idunD2AdYzxKqg6AmAz4uZ5lBVCMtnZU38D+YNrM6jsyPpfOBJjXNiCfRkh+SCdkXNAFyIG3REx6I6IQXdEDLojYtAdEYPuiBh0R8SgOyIG3REx6I6IQXdEDLojYtAd+euOULxCHwC2cy/ZVwCefi7+BV6cVo+19e9dAAAAAElFTkSuQmCC">
                                    <span class="ms-1 d-none d-sm-inline">Productos</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link align-middle px-0"> 
                                    <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACw0lEQVR4nO2av2sUQRTHBxMwiqiFouBP/IE2WogiItgIgn+BVrEQwcYUNjbpJRYWlqJgwN+ksYwgoiJiYxNRUbQyxcGxO9/v3p3EX0/GvNVL4JLdu7ndCewXhjtuZ96+z743M2+WM6ZSpaUrki9JSi8NwIsQQMRHM2WrV0dYgXiUiAz5Si0RGTBlCcCYLxAAw2VBHAbwE8AvkkfzjheRAZIf2mA+ichgf7zt7MQQgHf6JMe6sQFgWAE+ais+KmlKAXjvoHqJBoBhAGcKj0qvKTUvGn8dnw9mihCAqX5McCicS9lCQHxBcHbJ/ZdG7nuhm6OPm7GDjQqkG1URaVOVWj4PQUGkFj0unUGAmD444cMGK5AuVEWkTVVq9SMtSF4CMGKtPdStDZPx98wGsgjAbpJ3O5Tjz6Io2ho0iIgMArgM4Ls67T4nSV4jOU6ynh6SoihaEyRIHMdrATxtA3DOr2/vkyTJBgBv1PZ4cCD1en01ydcK8XWhY621dieAGQA/Wq3WlmBARGQZycfa/3Oz2dycwfaddBEIBoTkqEaiFkXRtkUNz6bYabX/KAgQa+0uNx/cWxJr7YnFEf6PU/tfggABcF+jccPkkFux1L4tHaTRaGzUd1atZrO5yeSQiCzXBzBTOoi19oI688DklHsI6bwqHQTAhLueJMkpk1NxHB9QkLelg1D3jSRJ9mVzf87Y82r/dggRmXLXrbU7srk/Z+w9jchICBGZVGeOmByq1WqrSDYA/I7jeHsIIFe0z6jJIQAX0yo4S38WsGodTGsrEVmRY7WKdW4dLxSEGVqWDXF6enolyVfafyILhBcQ9w+DPDAkb7kquIOtPW3lu9dmfInkMVdqpBscyauuKARwkuQ5AA9dya7Xv/mEAPDcG4jC7AXwZIEbthygW7HMUlCSJPvdGYPkTY3EdZJnSa4r2zez1PQH234E2ue/LPAAAAAASUVORK5CYII=">
                                    <span class="ms-1 d-none d-sm-inline">Ingredientes</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-item nav-link px-0 align-middle">
                                    <img class="icon" src="data:image/png;base64,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"> 
                                    <span class="ms-1 d-none d-sm-inline">Artículos</span> 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-item nav-link px-0 align-middle">
                                    <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABQ0lEQVR4nO2ZUU7DMAyGfYxtXIipO84GB4BrlQcmLrJxgP7/HAmeQJaSaopgCJCoQ/1JkerID/5lt0ltkSAIgmBKAGwA9CSV5JvzdbJYAXS1iHsHwf1oAbgbM5E3XgBsVXUpzlHVJYCdxZxj70zIQza20hgkb3LsvRknM1R1IY2hqotcYpRSa9IoLPGHECcwMuIMRkacwdlkBEAH4PncufgBOAJYSyNCjmW/FpKvBQdprbRYCfEEvxJSZ+AjW1oTUtOUEPyXdwTA2sR88tU6DMNwLQ7gbM6RVmAIcQYjI87gbDJC8gnA/tLzlH7fORD3AB4vPU/pN7/SalEIc8vUffO6JqV0lYVA8kzEbrM7aQySt2MT2/7Ny1jButsppZU4J6W0MhEAXsexgmHDkt8MW1wMeqquSV/GDE2O3oIgCAL5Y94BQec7np+r//UAAAAASUVORK5CYII=">
                                    <span class="ms-1 d-none d-sm-inline">Tipos de Pago</span> 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-item nav-link px-0 align-middle">
                                    <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABC0lEQVR4nO2XUQrCMBBEcwAPZvEQHtS/iGcQ/6T607/OXEAJUqi1mpZ2m1TmwUIKoe2wO5uNc2IlADgAOAPYhyB5CZHyGYAfLYTkI8dwE4QkzwRfMU2IywRKCJURE6jS4h+XVlVVG5LXKecAgGPsnejsyVWIHyDEmwpJCSWEyogJTG32vg60yq6FyB1CXWsoMrsR1DlCzVoPzVo/kEeoWcsGZjCiaNZqI7NTZreBmrXY3+5InppOZL02zUj4SHPrs163UWlRXcsG5ti1YqMOljD7QkL8bP8jjxjBMRkBsANwb6fZZQLfS+8GoPi6OWzo1qvLBH76qBwlJNdAREixBjEAyrqut0bJF24Oniwd2JYQnX07AAAAAElFTkSuQmCC">
                                    <span class="ms-1 d-none d-sm-inline">Facturas</span> 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-item nav-link px-0 align-middle">
                                    <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA1UlEQVR4nO2ZUQrCMBBE98tD6fm0ei2LN2n8n7lApBAh2BYrZGEj82ChhELzWLYZiJkQ4idIPkjmyAVg3COSeyjbK2JBoUSCQXXkHzuScz4AuAF4AkgAhnnNY8OuIgCuK//0i3UoksrmjyRP5Tl9vDN6HnpsKVIk3iKTk8jdU2RY+eDZOh32oQz6NEt0OewRoESCQXUkGFREqVBEoSLKAkWUGkWUhlAHYjCojgSDiigViihURFmgiFKjiNIQ6kAMBtWR3jvC4GXfaHUt4FnYuHIQQtgmLzQW+BQ0/h7GAAAAAElFTkSuQmCC">
                                    <span class="ms-1 d-none d-sm-inline">Conceptos</span> 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-item nav-link px-0 align-middle">
                                    <img class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACTElEQVR4nO2avY4TMRSFzb+EBLwA1fIKbAFU0CCQEB0lErzBigLtC/DzCvAcdMCGQTRAAVvsSoiSbJMo+LuzQaK6yOBIo2FC5seeGaI5kpWJxz7xiX18rycxZsCA/gPYAfaAu77s+1L3/R4wal2IiGiMYroSEmAm9l3pXEhf+UpjENL3GQHeFpnX1Wf7ZduRufc/CEn+ISRZxtcaBo+E/mJU9STwFDgIHdSA3TRN7xR9bnCPAE9iRefMQB+sEJKEEDL2ZJcqdy7m213wAZf99UHZ/lJXSGyztrYLySCkGLH9ZtqekbURYmpCVY8BW36T+Kaqp0rx9k2Ig6oeAT55MY/H4/HpykJCJX0i8lFE5vIHH0Rkezqdnl06kBxE5HaG63tIIZWSviUcLnu4YkoCuCUi7zr1CHDDzcBkMjljrb0OvPH1P6y1m1U40zS92huPqOpR4Jm//9XleCF4Sy2tvC+aJn2qegL47PvcNy0KSUoKKZ30uScmvs2LbL219gLwWkRS92qt3WgkpClW8c3n8/ML42frgVFuYxj1Wojzhh/oz1y/Q1efpuk1z3FYaZyx4kiAGdmJJSSJ7JEN4JX3yMtee8TvWouD171QvF3Ekef+/hcnKgRv6aW1LJas8ghwczabnXPR3UX5RXsf2S+a2JGdv4UUxpKauda4yrMB+pBr+YzXZb+IyHsReejyrtay36aIcB55VOs80hRN+VT1eO6E+Du57HJpRSlmEFIRoWe4NPrmkdpYOyGsy8/L0tbuEgvAaC3+gjFggAmGX+VoSJoTnElyAAAAAElFTkSuQmCC">
                                    <span class="ms-1 d-none d-sm-inline">Egresos</span> 
                                </a>
                            </li>
                        </ul>
                        <hr>
                </div>
            </div>
            <div class="col py-3">
                @yield('contenido')
            </div>
        </div>
        @yield('js')
    </body>
</html>