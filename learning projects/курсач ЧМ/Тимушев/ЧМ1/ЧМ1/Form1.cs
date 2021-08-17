using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ЧМ1
{
    public partial class Form1 : Form
    {
        
        public Form1()
        {
            InitializeComponent();
        }
        double h,x0,y0;
        public double H
        {
            get
            {
                return h;
            }
            
        }

        public double X0
        {
            get
            {
                return x0;
            }
            
        }

        public double Y0
        {
            get
            {
                return y0;
            }
            
        }

        private void textBox4_TextChanged(object sender, EventArgs e)
        {

        }
        double[] n = new double[3];
        private void button1_Click(object sender, EventArgs e)
        {
             h = Convert.ToDouble(textBox1.Text);
             x0 = Convert.ToDouble(textBox2.Text);
             y0 = Convert.ToDouble(textBox3.Text);
            textBox4.AppendText(Convert.ToString($"\r\nРезультат работы метода Эйлера h = {h}\r\n"));
            n=Calculate.TestEuler(h,x0,y0);
            textBox4.AppendText(Convert.ToString($"\r\nx= {n[0]}, f= {n[2]}\r\n"));
        }

        private void button2_Click(object sender, EventArgs e)
        {
            h = Convert.ToDouble(textBox1.Text);
            x0 = Convert.ToDouble(textBox2.Text);
            y0 = Convert.ToDouble(textBox3.Text);
            textBox4.AppendText(Convert.ToString($"\r\nРезультат работы метода Рунге-Кутта h = {h}\r\n"));
            n = Calculate.TestRungeKutta4(h, x0, y0);
            textBox4.AppendText(Convert.ToString($"\r\nx= {n[0]}, f= {n[2]}\r\n"));
        }
    }
}
