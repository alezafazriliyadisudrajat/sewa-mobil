@extends('layouts.tampilan')

@section('content')
<header class="bg-dark py-5">
  <div class="container px-4 px-lg-5 my-5">
    <div class="text-center text-white">
      <h1 class="display-4 fw-bolder">Sewa Mobil</h1>
    </div>
  </div>
</header>
<!-- Section-->
<section class="py-5">
  <div class="container px-4 px-lg-5 mt-5">
    <h3 class="text-center mb-5">Daftar Mobil</h3>
    <div
      class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
    >
      <div class="col mb-5">
        <div class="card h-100">
          <!-- Sale badge-->
          <div
            class="badge badge-custom bg-danger text-white position-absolute"
            style="top: 0; right: 0"
          >
            Tidak Tersedia
          </div>
          <!-- Product image-->
          <img
            class="card-img-top"
            src="data:image/jpeg;base64,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"
            alt="..."
          />
          <!-- Product details-->
          <div class="card-body card-body-custom pt-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">Special Item</h5>
              <!-- Product price-->
              <div class="rent-price mb-3">
                <span class="text-primary">Rp.200.000/</span>day
              </div>
              <ul class="list-unstyled list-style-group">
                <li
                  class="border-bottom p-2 d-flex justify-content-between"
                >
                  <span>Bahan bakar</span>
                  <span style="font-weight: 600">Bensin</span>
                </li>
                <li
                  class="border-bottom p-2 d-flex justify-content-between"
                >
                  <span>Jumlah Kursi</span>
                  <span style="font-weight: 600">5</span>
                </li>
                <li
                  class="border-bottom p-2 d-flex justify-content-between"
                >
                  <span>Transmisi</span>
                  <span style="font-weight: 600">Manual</span>
                </li>
              </ul>
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer border-top-0 bg-transparent">
            <div class="text-center">
              <a class="btn btn-success mt-auto" href="#">Sewa</a>
              <a
                class="btn btn-warning mt-auto text-white"
                href="{{ route('detail') }}"
                >Detail</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="col mb-5">
        <div class="card h-100">
          <!-- Sale badge-->
          <div
            class="badge badge-custom bg-info text-white position-absolute"
            style="top: 0; right: 0"
          >
            Tersedia
          </div>
          <!-- Product image-->
          <img
            class="card-img-top"
            src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgVFRYZGRgYHBgYGRoaHRkcGRoZGhgaGRgZHBgcIS4lHB4rIRgcJjgmKy8xNTU3HCQ7QDs0Py40NjEBDAwMEA8QGBERGjEdGB0xNDQ/MTQxMTQxPz80MTE0PzE1NDExMTQ0NDQ0NDQ0MT8xPzQxPzE/OjQ0MTQxMTQxP//AABEIAK0BJAMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABgEDBAUHAgj/xABMEAACAQIDBAYGBQcKBQUBAAABAgADEQQSIQUGMUETIlFhcZEHMkJSgaEUcrHB0WKCkpPC0tMVFiMzU2OUoqOyQ1Th4vCDhMTj8Rf/xAAWAQEBAQAAAAAAAAAAAAAAAAAAAQL/xAAWEQEBAQAAAAAAAAAAAAAAAAAAEQH/2gAMAwEAAhEDEQA/AOzREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBE8swAuTYTVbS29Roeu6g8gTr8FF2I7wLQNvE57tH0i01vkW/1my+WVXLD4CZW7+8n8oI6AtRcdW6MWy5gTTcEgXBsdCOKkG8sSpxKXnJaPpGq0waVeiWq0yUqMrhVLKxBIUp3eHMWBno+kk/8v8A6v8A2RCur5hK3nJf/wCkN/y/+r/9c9p6Rm50P9X/ALIhXWInLk9Iw50W+FRT+xL1P0kJzpuPBlP4RCulxOf0PSHTPsVP8h/amyob70W4hx4qPuMQqXRNBT3poNwbXvDgeeUy6m8FL2iAPeU5gPEaN8ctpIrdRLVGsrqGVgyngVIIPxEuwEREBERAREQEREBERAREQEREBERAREQERECk1u2Nqph6bVKjBVXiT28gBxLHkJc2ttBaFNqjmyqLsexR2DmSSFA5lhOD72bVqY2qC5IVjZKYOiINW4cWIFi3MsOQAFzBud4/SU7krTbo15a3c+Xq/m28TIRitqVXOazHMTYsbXOpJtx5cTM3DbKJIWlTLMeARSzHyuTNqm5OOdgRh2ChbAuyJqT1uqzA8hy5yojKu/tZfhf7TJPuBjzTxapewqqyD66/0iH/ACMPz5bx25OOpqzmgSqgk5HRyAOPUVix+AM0GFxDU3p1E1dHR07yrqQO+/CBKfSbg+jxi110TFIr/wDqIAjj/YfFjIoK06r6T9mZ8G5HrYZxVXt6Nuo48BcN+ZOPq95Bl9NKitMXNKlpRmDET0teYLEgTyr9v2wNsmIA/wD2ZlLHEc5pKbgy4alj4wJRh9ombPDbRPbIZhsRymwo4qUT3Z21WRs1NsjHjzRvrpz8RY98muxtvLXsrDJUtfLe4btKN7Q7uI0uNROPYbGd82+Gxl7A9xFjYgjgVI1B7xJuJXZokP2DvRfLTrtxsFq6AE8lfkrd/A9xIEmEy0REQEREBERAREQEREBERAREQEREBESxiL5SFbKxBANr2NtDbnaBzvfzaJrVehU9Smet+VUt8woJ+JPuiQahhc1V290Kg7iRnf5FPKTI7o4tSUAR1HCpnC5hfiykFg3bxEphNy8Yoa5wwzMzE56hPWOgsKfJQBx5TSG721KWHQo5RCWJuVN2GnEgcpuv524ZRq1NvBgp+ZM02P8AR9Xrpkeph7XB0WodRfmeHGatvRA5FvpKDwV/OxMgljb8YRQWZXFterkb55hOPY6uDVarTBSzLURTa6Et0iKRw06vlLW8m77YGu1B2zhcpzC4VlZQ2gv3keKmbHDbHashJrIjM1yr06pY2UKpBVSNVANjbW8DsKOmMpI62KYin1wT7FROspvzF7WnG8XuVjqJZegZ1UkBkKm9jbNkvmAPG1p0fcrAvTpU6ZbVB1idAQWJtbs1tY8hJXiMiEhmKqesCQxQaAEFrWQ3HMjQi3OB864nZ9an/WUaqW5sjqPMraYqVFPMT6So0Q4DI4KngysGQ+DD/r4zzV2LTfVlpk9uUX/SGsD5xqVlIFmXzlhqy++Pmfun0gm7dEcAngUUjz0bzJl9dg4fnRpnvCr9hGnmYHzZRxC+8PMD7SJ6rYhRbrD4EH7Lz6MqbIwi8aKfoL+EtjB4P+yT9BfwgfPeHrAm4YeYv36GZ6Ve+d6WhhRwRR+aPwlxVww9gfoj8JRwhMWBxIHiZn4fHr7w8xO1FMMeKIfFEP3Tw+Bwb3zUqRvxvST56RUjlGG2xTPVZ010IJGo5yS7A32Wgy06lYPRY2V2NzSPJXPE0zrZvZOhupGSTNuts1tThqPwpoP2Z4G5ezOtbDoMwynLdbgkG3VtzA8pKsSvDYhaih1IZWFwQQQfAjjL80Oz9i4agoWgi0wNLpox8W4se8zKK1F9SoGHY34yK2kTWUNpHMEqLlJ4EeqfwmxU3geoiICIiAiIgIiICIiAiIgUmgwlKqKtepUYWdgtNSCwWmhaxIDAAtmvprYC/ducU5COw4hWI8QDaaNtuISFZGHIkWIB7hxIge8WKos6qlRlJy2LgDS1+jubtZmF8wNjwM177axC+tRUeKuPtab9MqjNmFrXvfSx4G8Li0PB0P5w/GVEeO0Q6l2DEplfIpUICrLkbKwJOtjcG47tJ6G8J50R+mw+6SPjyBlpsIh400/RA+yBEsbUw1d1qVsGrulgrF2NrEkaWsbEk6zymFwzsG6OsH09RkNzxNgw7eUlL7KonilvAsPvlM1Ogo9VAeftHu5kwRh4LDolyExAuPaQH/bLj4lF9t0+sjj52l+ntSm5sr69+Zb+GYCXXqN2+cCK70OmRKyVGDo6XajmWo6sGXK2QgsLkNY3GnfI5V3mxKPbpaovYqtRcMxIOgZlSnmS55Mfwk1x2FLhHp01urhj1yisArWtZGINyDe1iBxnOdvbt1Grs6rkuMpQPTOlrdVmdCttQNOFud70bajvhiMwANN7306Jyx8CtQD/ACzOob6uTbJTNtD13VgezL0bW8CZDE2TXRmezC5LZAGI9oqnULC3qgkDhfThPeyg9AZn1cHN7a3JykW6RV1BB8gbwJy2+FNuq1Ntfdegfk7qflK1Ns0gAxFUKSAD0VVtSbAXpqwOunGRt8LicRVFU0yy5EQIUNgoLMSHfINS1+qSOUoNwqzK4AAL5CLuFy5LaLam2Um2pueekgkf8uUf77/DYr+FH8u0f77/AA+K/hSH/wAwsYvs1PhiR92Hnv8AmVjPdrfDFgf/ABoEtG38P71T/D4n+HLybcoH2n/U4j+HIX/MrHclr/4wfwJh7W3Tx9KmahFZFFszNis6ovN2VUU5RzN9L3OgMDo6baoe8/6nEfw5eTbNH3n/AFOI/cnGcFTqJmFWq3SZ3RRUqVRRuhTMWZDmJOfTgO29xN/tnAqztTp1ujqMrdCqVq1Ri1NnDCocxRUK02OlmV9OsFJgdKG3aHvVP1GJ/hy6m2qR4F/1OI+9Jyrd7drH4hHdTUcJUenm+lNTUlQL5QVJI1485uV3Ex545h446ofspwJ7W2nSYWJf9VW/clurvbQpgLnu/q9e9MZrX9sZmvf2FaRGnuDifae3/uKr/sCbPAbu4jCKSqB87DOyMxqrYgAdf1ktzButz1SCYEq2Jt0VnNI3LhcxYI6La+nr8eP/AEEkEh+52y3ompUrWDvYcQW43OZgSDrci3C9rC0mEapERIEREBERAREQEREDHx39W/1W+wyE4aiHFy4Uk9VTxa3HXkO/WTbHECm9/dPzFp84b4bRqjaHUJzYfIqWOgOUO1/EsQe0C0qa6pWxDFQhJsugHZMQv3yn0oOquODqrjuzAG3zlrNKMpKhB0JmXT2hUHB3/SP2XmvU6y+kDYfyxWA9e/iB+F54d3ruDa7GwAHADuvw5mYhE0O+O8b4KjakbVat0U8SqCxZh5qPj3EEJrV2E6re6t2gXv8AC41lrD7TCDI92A17yOAQ35cfgLcJxbYG/OLw1UP0r1Ev10c3DDmB2GdWxeJTEKMRSN0qqHHaNOB7+fiTIJLh9r0n95T3j8Jj4/6OCDUa9+eVj8wJG9nv1gJHd695n6VqCsUFHIDlQO9RmRWAW+g1YC3HQm/KEqfL9CPtj4q4/Zl4YXBH/iJ8Tb7Zx7aG2MXh1RqqMA/q3yFT3ZlFr25Tzhd8MS+i0A3n9twIV2ugmHT1K6Ae7nS3kTL74lV9VkYfksDb4Ccq2TtDEViM1JETmwJN+5RqG8b2776STvi0w9F69T1EA0vYu7GyUwe1jxPIXMDK3y3zGDpqFKmtU1RSQLL7zXB0PLz7LwSr6TcfpZbgi90CEefRTS4qpiqtSpXesWLnO4p1VKaCwGVWsFUaC/ACaZqTs10db2Fz0jFibanqk+cCY0/SNtByQM6+Ipi/h/Qw2/m0SDdiQRqpFPUEagjoZD6mGrAHNUW3O9R7fGXKdJL9Vxmt7NQjx4GB6p1arBg1JirMWylW0NrXUrYqbAAngbC40FsvG7RrOWITIXsHKKQxW+Yrf2VLdZsoGY3veYdUIFIZ1N+TOza+Gsw0oi5y1KSg/lOul9BewHwgSXAbz46hTWnSqFEUWAAcAad47pktvntL+2PjdvxkTq0AR1qqEX5F2+QvLS0kt/XKo+o3nYwJLV3z2lfKMS2bkuex8s151D0c7zPiEfD4nMMRT9cPfOQRcGx1Onx0PdOEPTproXZr21CAW82F5vt3MdSwmKw9ShXLliFcZGQLcjKCTx1tewta+pvA+gk2hSGiqxPcPxMv7P2gHdkAtYZuN+dj4cROcb0YKo+MRuncYWsnSZNLKbZcoU2U9YqddesRraevReKlLH4vDNV6RKSKVNlA6xUggAdW6kXHbA6xERIpERAREQEREBERAxsamam6jiVYDxINp874zZwqY7E5jY3upNz7CueHMLr4Kba2n0jON7y4FqG0K6rTLU6yUmDqpbo6jZ6dIta5AYJUS/Y4J4S4PG6JarRRL6oXQtysGJB8iJKG2GxF0cN3HQ+cgW7uPAxNekvVHUdALj1URH87KfiZMsPtF14m/wAjKjzWw7obOpXx4fA856QzbUNtqws4Fjya1vwl1tn0amqNkJ+K+X4QNOTpOY+kaqamMCA6U0UHsBYlifGxXynVMZg3pmzDQ8COBnKdvUWxGOrinqSSzMBfKtGkOkJHMLkbTmbDnImNPhuiQapm72sfjb8JOtytpKytRUZQpzBewMTmsOzNr+dND0VI7NbEYeigqU66I71MtV2RlYA5HUopzFL5RzGs3GBwFOi2Dqo2SpiaLM9Ox6Mq3WBpsScrA5SUvawuLaAlSvBaOPGc821iUXadVqhIQVkDFb3ACqMwtrpYHTXSdEpjrqRzsZybeoF8Zibc6z/J8tz3QmJFvBtOlXToabq/SNTckXbK6htQbXZrNqbXOt+FznYLA57Zx1eSaW/Ptofq8PGard3ZQQBrXY8W+4dgk42fhLSqvYLC8NJC9/ds0qtX6KS/RYc6mmFYPXNxUZgSLhRZB2WbtEmW8G0DhsO7oCajdSkoBJLsDYhRxygFvBTOWDawVQlXCUWsLXIZKh72Y8WPMkXJhMW1weGsSlUk+6abZvheyj9KeDh1PrX8cg+5zL1TF0mW6USjHjeoWX4BQPtloVe1VPgzj5XMKqKAGiK7E6gJSYk9p0blKLhST1qVUd5pN9xMx6jg1FGUA665idMp0sf/ADSSXYmwKlYdIKaMhIVQ79GXLVEpZlsCxVXdQSBa5tqQRINO2FyjRH8LBftmMMGCSWV/1lLysTwkrwmwnZGqGlSVbsA1WpWHVplVdwEGtMMCMxFyXyrmOUC7X3MxF2saWYVRT6NC5OU1FpGooYZjTV3CknXQkwIc+EW2iuT31Et8iZ5GHQC7UwPGoTfu0ElI3buimnWLvUZkoUxTsa2UkNURjU6tIAXLsMvZeY+8ewnwoo5ahZqqu2tM08uR8psKhuyk6hiFuLG2sCOZVHqoo+Lt+0JuVwtWrhmFHBJdBmeqisXsutw7Hq2HGxY+E11ZKtru5HeWVf8AaZtsBh2fDHpccqUQx/o+kLNm4/1QIPK49btAlE3x+03fZVLEobVKWt/rJnI07syy16E8S1bEY2s5u2WiNNBqX/dmBug3SbLxVEHMEW694WowJty6rCSH0L7LaiMYzIVzVKaAHsRWbQ8x1+POQx1GIiRSIiAiIgIiICIiAnL/AEgCouOR1cqjUaVNlGXrv0lYotiL2ALObck8J1Cc99JWHVauErvoqmrTJsSAWUMpNgT6q1ALAm7DvjByfEbRajjnqWByFFsvVBQU1RbW4HKFPiJItn71UqrhBSfMbkAIWJsCzG1IljYAnUEWF5Aa9TMzMTe5Av2hQFB8hJT6L66U8Yazmwp03sfy3yoP8uaVIlmHxdNwTTcG1wbkMAeeZkF18MkyKdR1N0ufqHMT+Yt28wJtto7XwVc3qpTduGe1nHg62YfAzQ4v6Nxp1nX8l7OvwOjD4kxUjYneBsjK9nVQb8ipUX17CLTl+w9vPhH+kBRUNRmSop4PTsGqIDbq5iwNxzQcRcGWY/aRKOrMr9R1U3D26ptYOMyfCR3Y+0cKmHFPE0s5Z6rZrG4BFMBQ69YeqT2awrb7So0uixT0GzYbF0+kQnitZHVyhA9V2ZVFu1WtZSt8hdm/SMRTYuFw+CoUVLkgKGp00Ytm5AKEJP1R7RIwNh9EjM+GLBGVjkZqhJ0Ksaa2S5DZDnvdSii9zLm0dmYzEoiUxTWh1GWkWVQ/UBQdU3ZbcAWzXLNYE3gTOifVP/luUiG3d1q1HEVa7a0aqs2dQSAWKs6ubWWzA8TroZLsLXQBVcFGUAEcQGGhF175JNlbUS4TOpvoCCL35AyjnOwHVlyi2ZdSORHvDu+zyvI1xGQXYWGtieGnGx4GS3FbEoO4d6KF1Nw4UK4P11se7jMDE7KemS+GNjxamdUa2osDp8Dw5EcIqRy/eXEYjEVwKFQU+hBUDpMlQs4BYhQQStsq621DcZqa1TaSf1gLj8pUYefrfOdTxtLBY/qYygq1R1czXVrjktQWZfqt85HdoeimohvgsUyD3KhZf89Ma/FfjIqAYqvVcgsgTTgiBQe+5uT52mE1WqPVF/FRf7BJpifRbjnJJCOx4t0gLHxLan4zHb0W7SsAAB41UtbuAMCII1QspddASToBy521klTefGWISowU5LKqU8iCmwemqKVsiqVWwFhpreZa+ifaDHrCl8alz98ur6H8ceL4ceLv9yGBqsXvJiyczV6inMrXV6dPVBZB1CvVA4L6ouTa5N7I2/iGqdL07ioFZc4dFYI7F2W6ngWYk9/wkjp+hzFc6uGHg1Q/sCZSehqufWxdIeFNj9pECHYvbddlKviHZMoQoarlSvAJkAIK91rTV18QHVVaqQqCyjrsAPdUNbKL62E6hR9DFvWxpP1aKj7XMzafobw3t4jEN9Xo1/ZMDjSKi8GZr20C2+Zm92DicKtw+Gq1q5OWmtwUa+gBy2N7m1rNe4nWaPor2ZT1daj251KpX/Zlm1wWB2ZhDmpLQRwCMy9dwOYzdZoGl3U3S6Gg2YmnUrJUD01s1On0liFAvclcoHrWuTbgDJnsbBpRXInM3ZjxY24nyAtLGGxaOGqBlCDQXIBtzJXiL6WB1075l7PqlzcAhBwJ0LnttyUfeIGziIkUiIgIiICIiAlJWIFLzTbz7HGLw70GtZxoeasNVZTyIM3UpaB8+7U9F2Mpk5GR15EaTRVN2MXSuLle23OfTrLeYOJ2Yj8VED5lbZlYes7+Zlv6M682+c+gsbujTbgBI3j9yewQOQl2HbNru/Qw7LVbENYUCrhSL51eyMFW+rBlWwNwc5uOYk2M3SZfZkW2ps84dwWUlHBDAWuV0va+mZSAw77S4NhsvaDVav0m2WlTenTpIOBdnTVz7eUBSb6AlLaCZH0d3pVxRdhiMFVqozA9arQZ2cBhwIJzWX1bgC3XMx9rVEp08ElIg0y6VGdb5c+e9RGHEEEjQ8lEuVq74bH4irlBpuCjhvVqZ0VigB462ueAGaVGdsrbodAlRVZ/WJ1RyH64Iscuma3qm1pTEYtb8D5g/cJA8ZWLuWJuSSSeFyTcm3K5J0lBWccHYfnH8YSOl4DenEUrBKzZR7L9dfDrXsPAiSLBekA6CrTRu+mxQ/oPe/mJyFKrAC7NfxP4yv0hvePnIs12nH7ewGIS9TOjgaHL1/DMpKkdxPlNFgt5no6UnJQaKtQAi3he6+Aa05ocS3aZ4dywIJ4xSOvLv7V5rR8n/fno+kCp7tHyf9+cUbDt4/GU+jN2fMQO0n0hP/cD4N+/LT+kdx7dAfA/e8439GPYPlKjDnugdaqekpv7WmPBV++8xqvpKf8At/0UX9ycualbnLLuByMEdJr+kZ2/41T4Ar9gE11fflm4tWbxcn7WkB+kd0dOe6KRMH3sPKlfxYD7jLY3rqEgLTUkkAC7NcnQAAAEknzkXpFmNhz8B852H0Z7q4emy4iq61aw1RR6lM+9rqz99gBy7YpEv3c3VVAlbEAmuygulwURjqVXS5toL35SVgW0E8q957EivUREBERAREQEREBERAREQEpaViB5tPLIDLkpAwMRglbkJE95910r02S1j6yMBqrDgR29hHMGTorLT0bwPmXHYathHKMHQ39ZHKq1uBB08uU1uKxzve5OuhZ2LuR2FmN7d0+mdp7vUMQMtVFYd4kSxnopwjG6KV85akcHDgQlUA3nY6/olT2WmDV9FhHDWRXMFr3l5DedAb0dOvsGef5kOvsnygQcIZUUzJ0m57e6ZdXdA9hgQMIY6MzoCbnnsMyE3P8AyYHOOhMDDnsnTk3R/Jl5d0vyYHLPojHlK/yWTynV03S/J+UyKe6fdA5CNjE+zMmhu4T7M7DR3UXsmzw27SDlA5JgN1PyZOt39islrXEmlDZCLyEzEwyjgIFrBIQBeZgEBZWBWIiAiIgIiICIiAiIgIiICIiAiIgIiICUtKxApaUtPUQPOWeSg7BLkQLJoL7olPoqe6JfiBY+jL2R9GXsl+IFkUF7JUUh2S7EC30Y7JXIOye4gecsrKxApErEBERAREQEREBERA//2Q=="
            alt="..."
          />
          <!-- Product details-->
          <div class="card-body card-body-custom pt-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">Special Item</h5>
              <!-- Product price-->
              <div class="rent-price mb-3">
                <span class="text-primary">Rp.200.000/</span>day
              </div>
              <ul class="list-unstyled list-style-group">
                <li
                  class="border-bottom p-2 d-flex justify-content-between"
                >
                  <span>Bahan bakar</span>
                  <span style="font-weight: 600">Bensin</span>
                </li>
                <li
                  class="border-bottom p-2 d-flex justify-content-between"
                >
                  <span>Jumlah Kursi</span>
                  <span style="font-weight: 600">5</span>
                </li>
                <li
                  class="border-bottom p-2 d-flex justify-content-between"
                >
                  <span>Transmisi</span>
                  <span style="font-weight: 600">Manual</span>
                </li>
              </ul>
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer border-top-0 bg-transparent">
            <div class="text-center">
              <a class="btn btn-success mt-auto" href="#">Sewa</a>
              <a
                class="btn btn-warning mt-auto text-white"
                href="{{ route('detail') }}"
                >Detail</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="col mb-5">
        <div class="card h-100">
          <!-- Sale badge-->
          <div
            class="badge badge-custom bg-info text-white position-absolute"
            style="top: 0; right: 0"
          >
            Tersedia
          </div>
          <!-- Product image-->
          <img
            class="card-img-top"
            src="https://awsimages.detik.net.id/community/media/visual/2021/06/18/toyota-alphard.jpeg?w=1200"
            alt="..."
          />
          <!-- Product details-->
          <div class="card-body card-body-custom pt-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder">Special Item</h5>
              <!-- Product price-->
              <div class="rent-price mb-3">
                <span class="text-primary">Rp.200.000/</span>day
              </div>
              <ul class="list-unstyled list-style-group">
                <li
                  class="border-bottom p-2 d-flex justify-content-between"
                >
                  <span>Bahan bakar</span>
                  <span style="font-weight: 600">Bensin</span>
                </li>
                <li
                  class="border-bottom p-2 d-flex justify-content-between"
                >
                  <span>Jumlah Kursi</span>
                  <span style="font-weight: 600">5</span>
                </li>
                <li
                  class="border-bottom p-2 d-flex justify-content-between"
                >
                  <span>Transmisi</span>
                  <span style="font-weight: 600">Manual</span>
                </li>
              </ul>
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer border-top-0 bg-transparent">
            <div class="text-center">
              <a class="btn btn-success mt-auto" href="#">Sewa</a>
              <a
                class="btn btn-warning mt-auto text-white"
                href="{{ route('detail') }}"
                >Detail</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection