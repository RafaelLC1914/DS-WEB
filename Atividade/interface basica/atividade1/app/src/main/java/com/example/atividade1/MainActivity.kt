package com.example.atividade1

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.material3.Card
import androidx.compose.material3.MaterialTheme
import androidx.compose.material3.Scaffold
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import com.example.atividade1.ui.theme.Atividade1Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Atividade1Theme {
                Surface(
                    modifier = Modifier.fillMaxHeight().fillMaxWidth(),
                    color = MaterialTheme.colorScheme.tertiary
                ) {
                    Column(
                        verticalArrangement = Arrangement.Center,
                        horizontalAlignment = Alignment.CenterHorizontally

                    ) {

                        Card(modifier = Modifier.padding(55.dp)) // Espaçamento externo
                        {
                            Text(modifier = Modifier.padding(10.dp), text = "Nome: João Silva")
                            Text(modifier = Modifier.padding(10.dp), text = "Tel: (11) 99999-9999")
                            Text(modifier = Modifier.padding(10.dp), text = "Email: joao@email.com")

                        }
                        Card(modifier = Modifier.padding(55.dp)) // Espaçamento externo
                        {
                            Text(modifier = Modifier.padding(10.dp), text = "Nome: Maria Souza")
                            Text(modifier = Modifier.padding(10.dp), text = "Tel: (21) 98888-8888")
                            Text(
                                modifier = Modifier.padding(10.dp),
                                text = "Email: maria@email.com"
                            )


                        }
                    }
                }
            }
        }
    }
}




